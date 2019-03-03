<?php
namespace Payum\Bundle\PayumBundle\Tests\Controller;

use Payum\Bundle\PayumBundle\Controller\CancelController;
use Payum\Core\GatewayInterface;
use Payum\Core\Model\Token;
use Payum\Core\Payum;
use Payum\Core\Registry\RegistryInterface;
use Payum\Core\Request\Cancel;
use Payum\Core\Security\GenericTokenFactoryInterface;
use Payum\Core\Security\HttpRequestVerifierInterface;
use Payum\Core\Storage\StorageInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CancelControllerTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldBeSubClassOfController()
    {
        $rc = new \ReflectionClass(CancelController::class);

        $this->assertTrue($rc->isSubclassOf(Controller::class));
    }

    /**
     * @test
     */
    public function shouldExecuteCancelRequest()
    {
        $request = Request::create('/');
        $request->query->set('foo', 'fooVal');

        $token = new Token;
        $token->setGatewayName('theGateway');
        $token->setAfterUrl('http://example.com/theAfterUrl');

        $httpRequestVerifierMock = $this->createMock(HttpRequestVerifierInterface::class);
        $httpRequestVerifierMock
            ->expects($this->once())
            ->method('verify')
            ->with($this->identicalTo($request))
            ->will($this->returnValue($token))
        ;
        $httpRequestVerifierMock
            ->expects($this->once())
            ->method('invalidate')
            ->with($this->identicalTo($token))
        ;

        $gatewayMock = $this->createMock(GatewayInterface::class);
        $gatewayMock
            ->expects($this->once())
            ->method('execute')
            ->with($this->isInstanceOf(Cancel::class))
        ;

        $registryMock = $this->createMock(RegistryInterface::class);
        $registryMock
            ->expects($this->once())
            ->method('getGateway')
            ->with('theGateway')
            ->will($this->returnValue($gatewayMock))
        ;

        $payum = new Payum(
            $registryMock,
            $httpRequestVerifierMock,
            $this->createMock(GenericTokenFactoryInterface::class),
            $this->createMock(StorageInterface::class)
        );

        $container = new Container;
        $container->set('payum', $payum);

        $controller = new CancelController;
        $controller->setContainer($container);

        $response = $controller->doAction($request);

        $this->assertInstanceOf(RedirectResponse::class, $response);
        $this->assertEquals('http://example.com/theAfterUrl', $response->getTargetUrl());
    }

    /**
     * @test
     */
    public function shouldExecuteCancelRequestWithoutAfterUrl()
    {
        $request = Request::create('/');
        $request->query->set('foo', 'fooVal');

        $token = new Token;
        $token->setGatewayName('theGateway');
        $token->setAfterUrl(null);

        $httpRequestVerifierMock = $this->createMock(HttpRequestVerifierInterface::class);
        $httpRequestVerifierMock
            ->expects($this->once())
            ->method('verify')
            ->with($this->identicalTo($request))
            ->will($this->returnValue($token))
        ;
        $httpRequestVerifierMock
            ->expects($this->once())
            ->method('invalidate')
            ->with($this->identicalTo($token))
        ;

        $gatewayMock = $this->createMock(GatewayInterface::class);
        $gatewayMock
            ->expects($this->once())
            ->method('execute')
            ->with($this->isInstanceOf(Cancel::class))
        ;

        $registryMock = $this->createMock(RegistryInterface::class);
        $registryMock
            ->expects($this->once())
            ->method('getGateway')
            ->with('theGateway')
            ->will($this->returnValue($gatewayMock))
        ;

        $payum = new Payum(
            $registryMock,
            $httpRequestVerifierMock,
            $this->createMock(GenericTokenFactoryInterface::class),
            $this->createMock(StorageInterface::class)
        );

        $container = new Container;
        $container->set('payum', $payum);

        $controller = new CancelController;
        $controller->setContainer($container);

        $response = $controller->doAction($request);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(204, $response->getStatusCode());
    }
}
