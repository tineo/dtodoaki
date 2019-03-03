<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ja', array (
  'validators' => 
  array (
    'This value should be false.' => 'falseでなければなりません。',
    'This value should be true.' => 'trueでなければなりません。',
    'This value should be of type {{ type }}.' => '型は{{ type }}でなければなりません。',
    'This value should be blank.' => '空でなければなりません。',
    'The value you selected is not a valid choice.' => '有効な選択肢ではありません。',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => '{{ limit }}個以上選択してください。',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => '{{ limit }}個以内で選択してください。',
    'One or more of the given values is invalid.' => '無効な選択肢が含まれています。',
    'This field was not expected.' => 'このフィールドは予期されていませんでした。',
    'This field is missing.' => 'このフィールドは、欠落しています。',
    'This value is not a valid date.' => '有効な日付ではありません。',
    'This value is not a valid datetime.' => '有効な日時ではありません。',
    'This value is not a valid email address.' => '有効なメールアドレスではありません。',
    'The file could not be found.' => 'ファイルが見つかりません。',
    'The file is not readable.' => 'ファイルを読み込めません。',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ファイルのサイズが大きすぎます({{ size }} {{ suffix }})。有効な最大サイズは{{ limit }} {{ suffix }}です。',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'ファイルのMIMEタイプが無効です({{ type }})。有効なMIMEタイプは{{ types }}です。',
    'This value should be {{ limit }} or less.' => '{{ limit }}以下でなければなりません。',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => '値が長すぎます。{{ limit }}文字以内でなければなりません。',
    'This value should be {{ limit }} or more.' => '{{ limit }}以上でなければなりません。',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => '値が短すぎます。{{ limit }}文字以上でなければなりません。',
    'This value should not be blank.' => '空であってはなりません。',
    'This value should not be null.' => 'nullであってはなりません。',
    'This value should be null.' => 'nullでなければなりません。',
    'This value is not valid.' => '有効な値ではありません。',
    'This value is not a valid time.' => '有効な時刻ではありません。',
    'This value is not a valid URL.' => '有効なURLではありません。',
    'The two values should be equal.' => '2つの値が同じでなければなりません。',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ファイルのサイズが大きすぎます。有効な最大サイズは{{ limit }} {{ suffix }}です。',
    'The file is too large.' => 'ファイルのサイズが大きすぎます。',
    'The file could not be uploaded.' => 'ファイルをアップロードできませんでした。',
    'This value should be a valid number.' => '有効な数字ではありません。',
    'This file is not a valid image.' => 'ファイルが画像ではありません。',
    'This is not a valid IP address.' => '有効なIPアドレスではありません。',
    'This value is not a valid language.' => '有効な言語名ではありません。',
    'This value is not a valid locale.' => '有効なロケールではありません。',
    'This value is not a valid country.' => '有効な国名ではありません。',
    'This value is already used.' => '既に使用されています。',
    'The size of the image could not be detected.' => '画像のサイズが検出できません。',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => '画像の幅が大きすぎます({{ width }}ピクセル)。{{ max_width }}ピクセルまでにしてください。',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => '画像の幅が小さすぎます({{ width }}ピクセル)。{{ min_width }}ピクセル以上にしてください。',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => '画像の高さが大きすぎます({{ height }}ピクセル)。{{ max_height }}ピクセルまでにしてください。',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => '画像の高さが小さすぎます({{ height }}ピクセル)。{{ min_height }}ピクセル以上にしてください。',
    'This value should be the user\'s current password.' => 'ユーザーの現在のパスワードでなければなりません。',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'ちょうど{{ limit }}文字でなければなりません。',
    'The file was only partially uploaded.' => 'ファイルのアップロードは完全ではありません。',
    'No file was uploaded.' => 'ファイルがアップロードされていません。',
    'No temporary folder was configured in php.ini.' => 'php.iniで一時フォルダが設定されていません。',
    'Cannot write temporary file to disk.' => '一時ファイルをディスクに書き込むことができません。',
    'A PHP extension caused the upload to fail.' => 'PHP拡張によってアップロードに失敗しました。',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => '{{ limit }}個以上の要素を含んでなければいけません。',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => '要素は{{ limit }}個までです。',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => '要素はちょうど{{ limit }}個でなければなりません。',
    'Invalid card number.' => '無効なカード番号です。',
    'Unsupported card type or invalid card number.' => '未対応のカード種類又は無効なカード番号です。',
    'This is not a valid International Bank Account Number (IBAN).' => '有効なIBANコードではありません。',
    'This value is not a valid ISBN-10.' => '有効なISBN-10コードではありません。',
    'This value is not a valid ISBN-13.' => '有効なISBN-13コードではありません。',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => '有効なISBN-10コード又はISBN-13コードではありません。',
    'This value is not a valid ISSN.' => '有効なISSNコードではありません。',
    'This value is not a valid currency.' => '有効な貨幣ではありません。',
    'This value should be equal to {{ compared_value }}.' => '{{ compared_value }}と等しくなければなりません。',
    'This value should be greater than {{ compared_value }}.' => '{{ compared_value }}より大きくなければなりません。',
    'This value should be greater than or equal to {{ compared_value }}.' => '{{ compared_value }}以上でなければなりません。',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => '{{ compared_value_type }}としての{{ compared_value }}と等しくなければなりません。',
    'This value should be less than {{ compared_value }}.' => '{{ compared_value }}未満でなければなりません。',
    'This value should be less than or equal to {{ compared_value }}.' => '{{ compared_value }}以下でなければなりません。',
    'This value should not be equal to {{ compared_value }}.' => '{{ compared_value }}と等しくてはいけません。',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => '{{ compared_value_type }}としての{{ compared_value }}と等しくてはいけません。',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => '画像のアスペクト比が大きすぎます({{ ratio }})。{{ max_ratio }}までにしてください。',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => '画像のアスペクト比が小さすぎます({{ ratio }})。{{ min_ratio }}以上にしてください。',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => '画像が正方形になっています({{ width }}x{{ height }}ピクセル)。正方形の画像は許可されていません。',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => '画像が横向きになっています({{ width }}x{{ height }}ピクセル)。横向きの画像は許可されていません。',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => '画像が縦向きになっています({{ width }}x{{ height }}ピクセル)。縦向きの画像は許可されていません。',
    'An empty file is not allowed.' => '空のファイルは許可されていません。',
    'The host could not be resolved.' => 'ホストを解決できませんでした。',
    'This value does not match the expected {{ charset }} charset.' => 'この値は予期される文字コード（{{ charset }}）と異なります。',
    'This is not a valid Business Identifier Code (BIC).' => '有効なSWIFTコードではありません。',
    'Error' => 'エラー',
    'This is not a valid UUID.' => '有効なUUIDではありません。',
    'This value should be a multiple of {{ compared_value }}.' => '{{ compared_value }}の倍数でなければなりません。',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'このSWIFTコードはIBANコード（{{ iban }}）に関連付けられていません。',
    'This form should not contain extra fields.' => 'フィールドグループに追加のフィールドを含んではなりません。',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'アップロードされたファイルが大きすぎます。小さなファイルで再度アップロードしてください。',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRFトークンが無効です、再送信してください。',
    'fos_user.username.already_used' => 'ユーザー名は既に使用されています',
    'fos_user.username.blank' => 'ユーザー名を入力してください',
    'fos_user.username.short' => 'ユーザー名が短すぎます',
    'fos_user.username.long' => 'ユーザー名が長すぎます',
    'fos_user.email.already_used' => 'メールアドレスは既に使用されています',
    'fos_user.email.blank' => 'メールアドレスを入力してください',
    'fos_user.email.short' => 'メールアドレスが短すぎます',
    'fos_user.email.long' => 'メールアドレスが長すぎます',
    'fos_user.email.invalid' => 'メールアドレスが正しくありません',
    'fos_user.password.blank' => 'パスワードを入力してください',
    'fos_user.password.short' => 'パスワードが短すぎます',
    'fos_user.password.mismatch' => '入力されたパスワードが一致しません',
    'fos_user.new_password.blank' => '新しいパスワードを入力してください',
    'fos_user.new_password.short' => 'パスワードが短すぎます',
    'fos_user.current_password.invalid' => '正しいパスワードを入力してください',
    'fos_user.group.blank' => '名前を入力してください',
    'fos_user.group.short' => '名前が短すぎます',
    'fos_user.group.long' => '名前が長すぎます',
    'fos_group.name.already_used' => 'その名前は既に使用されています',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => '認証エラーが発生しました。',
    'Authentication credentials could not be found.' => '認証資格がありません。',
    'Authentication request could not be processed due to a system problem.' => 'システムの問題により認証要求を処理できませんでした。',
    'Invalid credentials.' => '資格が無効です。',
    'Cookie has already been used by someone else.' => 'Cookie が別のユーザーで使用されています。',
    'Not privileged to request the resource.' => 'リソースをリクエストする権限がありません。',
    'Invalid CSRF token.' => 'CSRF トークンが無効です。',
    'Digest nonce has expired.' => 'Digest の nonce 値が期限切れです。',
    'No authentication provider found to support the authentication token.' => '認証トークンをサポートする認証プロバイダーが見つかりません。',
    'No session available, it either timed out or cookies are not enabled.' => '利用可能なセッションがありません。タイムアウトしたか、Cookie が無効になっています。',
    'No token could be found.' => 'トークンが見つかりません。',
    'Username could not be found.' => 'ユーザー名が見つかりません。',
    'Account has expired.' => 'アカウントが有効期限切れです。',
    'Credentials have expired.' => '資格が有効期限切れです。',
    'Account is disabled.' => 'アカウントが無効です。',
    'Account is locked.' => 'アカウントはロックされています。',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'グループの更新',
    'group.show.name' => 'グループ名',
    'group.new.submit' => 'グループの作成',
    'group.flash.updated' => 'グループが更新されました',
    'group.flash.created' => 'グループが作成されました',
    'group.flash.deleted' => 'グループが削除されました',
    'security.login.username' => 'ユーザー名',
    'security.login.password' => 'パスワード',
    'security.login.remember_me' => 'ログイン状態を記憶する',
    'security.login.submit' => 'ログイン',
    'profile.show.username' => 'ユーザー名',
    'profile.show.email' => 'メールアドレス',
    'profile.edit.submit' => '更新',
    'profile.flash.updated' => 'プロフィールが更新されました',
    'change_password.submit' => 'パスワードの変更',
    'change_password.flash.success' => 'パスワードが変更されました',
    'registration.check_email' => '%email% 宛にメールを送信しました。メールに記載された確認 URL にアクセスして、アカウントを有効化してください。',
    'registration.confirmed' => '%username% さんのアカウントの確認が完了しました。',
    'registration.back' => '元のページに戻る',
    'registration.submit' => '登録',
    'registration.flash.user_created' => 'ユーザーの作成が完了しました',
    'registration.email.subject' => '%username% さん、ようこそ!',
    'registration.email.message' => 'こんにちは %username% さん!

アカウントを有効化するには、次の確認 URL へアクセスしてください %confirmationUrl%

このリンクは一度しか使用できません。

開発チーム
',
    'resetting.check_email' => 'メールが送信されました。送信されたリンクをクリックしてパスワードをリセットして下さい。
注意：パスワードのリセットは %tokenLifetime% 時間のあいだに一度しか要求できません。

もしメールが届かない場合は、迷惑メールフォルダをご確認いただき、その上で再度やり直して下さい。
',
    'resetting.request.username' => 'ユーザー名またはメールアドレス',
    'resetting.request.submit' => 'パスワードのリセット',
    'resetting.reset.submit' => 'パスワードの変更',
    'resetting.flash.success' => 'パスワードのリセットが完了しました',
    'resetting.email.subject' => 'パスワードのリセット',
    'resetting.email.message' => 'こんにちは %username% さん!

パスワードをリセットするには、次のリセット URL へアクセスしてください %confirmationUrl%


開発チーム
',
    'layout.logout' => 'ログアウト',
    'layout.login' => 'ログイン',
    'layout.register' => '登録',
    'layout.logged_in_as' => '%username% でログイン中',
    'form.group_name' => 'グループ名',
    'form.username' => 'ユーザー名',
    'form.email' => 'メールアドレス',
    'form.current_password' => '現在のパスワード',
    'form.password' => 'パスワード',
    'form.password_confirmation' => '確認',
    'form.new_password' => '新しいパスワード',
    'form.new_password_confirmation' => '確認',
  ),
));

$catalogueEs = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'Este valor no es un UUID válido.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
    'fos_user.username.already_used' => 'El nombre de usuario ya está en uso.',
    'fos_user.username.blank' => 'Por favor, ingrese un nombre de usuario.',
    'fos_user.username.short' => 'El nombre de usuario es demasiado corto.',
    'fos_user.username.long' => 'El nombre de usuario es demasiado largo.',
    'fos_user.email.already_used' => 'La dirección de correo ya está en uso.',
    'fos_user.email.blank' => 'Por favor, ingrese una dirección de correo.',
    'fos_user.email.short' => 'La dirección de correo es demasiado corta.',
    'fos_user.email.long' => 'La dirección de correo es demasiado larga.',
    'fos_user.email.invalid' => 'La dirección de correo no es válida.',
    'fos_user.password.blank' => 'Por favor, ingrese una contraseña.',
    'fos_user.password.short' => 'La contraseña es demasiado corta.',
    'fos_user.password.mismatch' => 'Las dos contraseñas no coinciden.',
    'fos_user.new_password.blank' => 'Por favor, ingrese una nueva contraseña.',
    'fos_user.new_password.short' => 'La nueva contraseña es demasiado corta.',
    'fos_user.current_password.invalid' => 'La contraseña ingresada no es válida.',
    'fos_user.group.blank' => 'Por favor, ingrese un nombre.',
    'fos_user.group.short' => 'El nombre es demasiado corto.',
    'fos_user.group.long' => 'El nombre es demasiado largo.',
    'fos_group.name.already_used' => 'El nombre ya está en uso.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'Digest nonce has expired.' => 'El vector de inicialización (digest nonce) ha expirado.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Actualizar grupo',
    'group.show.name' => 'Nombre de grupo',
    'group.new.submit' => 'Crear grupo',
    'group.flash.updated' => 'El grupo ha sido actualizado.',
    'group.flash.created' => 'El grupo ha sido creado.',
    'group.flash.deleted' => 'El grupo ha sido borrado.',
    'security.login.username' => 'Nombre de usuario',
    'security.login.password' => 'Contraseña',
    'security.login.remember_me' => 'Recordar',
    'security.login.submit' => 'Entrar',
    'profile.show.username' => 'Nombre de usuario',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Actualizar usuario',
    'profile.flash.updated' => 'El perfil ha sido actualizado.',
    'change_password.submit' => 'Cambiar contraseña',
    'change_password.flash.success' => 'La contraseña se ha cambiado con éxito.',
    'registration.check_email' => 'Se ha enviado un correo electrónico a %email%. Contiene un enlace de activación al que debes acceder para activar tu cuenta.',
    'registration.confirmed' => 'Felicidades %username%, tu cuenta está ahora confirmada.',
    'registration.back' => 'Volver a la página original.',
    'registration.submit' => 'Registrar',
    'registration.flash.user_created' => 'El usuario se ha creado satisfactoriamente.',
    'registration.email.subject' => '¡Bienvenido %username%!',
    'registration.email.message' => '¡Hola %username%!

Para completar la validación de tu cuenta, por favor visita %confirmationUrl%

Este enlace sólo puede utilizarse una vez para validar tu cuenta.

Atentamente,
el Equipo.
',
    'resetting.check_email' => 'Se ha enviado un correo electrónico a tu cuenta de correo. Contiene un enlace de activación al que debes acceder para restablecer tu contraseña.
Nota: Solo se puede solicitar una nueva contraseña cada %tokenLifetime% horas.

Si no recibes un correo electrónico, comprueba tu carpeta de correo no deseado o inténtalo de nuevo.
',
    'resetting.request.username' => 'Nombre de usuario o correo electrónico',
    'resetting.request.submit' => 'Restablecer contraseña',
    'resetting.reset.submit' => 'Cambiar contraseña',
    'resetting.flash.success' => 'La contraseña se ha cambiado con éxito.',
    'resetting.email.subject' => 'Restablecer Contraseña',
    'resetting.email.message' => '¡Hola %username%!

Para restablecer tu contraseña, por favor visita %confirmationUrl%

Atentamente,
el Equipo.
',
    'layout.logout' => 'Salir',
    'layout.login' => 'Entrar',
    'layout.register' => 'Registrar',
    'layout.logged_in_as' => 'Identificado como %username%',
    'form.group_name' => 'Nombre de grupo',
    'form.username' => 'Nombre de usuario',
    'form.email' => 'Email',
    'form.current_password' => 'Contraseña actual',
    'form.password' => 'Contraseña',
    'form.password_confirmation' => 'Repita la contraseña',
    'form.new_password' => 'Nueva contraseña',
    'form.new_password_confirmation' => 'Repita la contraseña',
  ),
  'VichUploaderBundle' => 
  array (
    'download' => 'Descargar',
    'form.label.delete' => '¿Eliminar?',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Anterior',
    'label_next' => 'Siguiente',
  ),
  'messages' => 
  array (
    'Listing & Directory Application for Symfony' => 'Dtodoaqui',
    'Directory Platform' => 'Establecimientos',
    'Home' => 'Inicio',
    'Listings' => 'Establecimientos',
    'Blog' => 'Noticias',
    'Login' => 'Iniciar sesion',
    'Register' => 'Resgistrate',
    'Add Listing' => 'Agregar Establecimiento',
    'Toggle Navigation' => 'Navegacion',
    'Search City Gems' => 'Busca establecimientos',
    'Find the best spots or places in your city by using our directory theme. Start listing anything today.' => 'Encuentra los mejores establecimientos cerca a ti',
    'Keyword Search' => 'Termino de busqueda',
    'Type Place' => 'Ingresa zona',
    'All Categories' => 'Todas las categorias',
    'Search Listings' => 'Buscar Local',
    'Get best listing notifications happening near you.' => 'Recibe notificaciones de establecimientos nuevos',
    'Once per month we will post you e-mail informing you about nearby events. We promise that we will not share your e-mail address. You can always have an option to unsubscribe.' => 'Ingresa tu correo electronico y recibe notificaciones de las novedades.',
    'E-mail address' => 'Direccion E-mail',
    'Subscribe' => 'Suscribete',
    'All rights reserved.' => 'Todos los derechos reservados',
    'Created by' => 'Creado por',
    'Create Account' => 'Crear cuenta',
    'No results found' => 'No se encontraron resultados',
    'Sorry about that, but there there are no results for your query.' => 'Lo sentimos pero no hay elementos para mostrar.',
    'Listings & Classifieds' => 'Clasificados',
    'Save Search Query' => 'Guardar Busqueda',
    'Search by keyword' => '¿Que buscar?',
    'Place Latitude' => 'Latitud',
    'Place Longitude' => 'Longitud',
    'Price' => 'Precio',
    'Price from' => 'Precio desde',
    'Price to' => 'Precio hasta',
    'Radius' => 'Radio',
    'Save search query' => 'Guardar busqueda',
    'Show listings in grid' => 'Mostrar en grilla',
    'Show listings in rows' => 'Mostrar en listado',
    'Sign In' => 'Crear cuenta',
    'Don\'t have an account? <a href="%link%">Create new account</a>, it takes less than a minute.' => '¿No tienes una cuenta? <a href="%link%">Crearte cuenta nueva</a>, no te tomará mas de un minuto.',
    'Return Back' => 'Ir al inicio',
    'Registration' => 'Registrar cuenta',
    'Forgot Password?' => '¿Olvidaste tu contraseña?',
    'Blog Posts' => 'Noticias',
    'Posts' => 'Publicaciones',
    'Reset Password' => 'Regenerar Contraseña',
    'Type your e-mail address below and we will get in touch with you as soon as possible.' => 'Ingresa tu correo electronico debajo y te escribiremos los mas pronto posible.',
    'Account Registration' => 'Registro de cuenta',
    'Already have an account? <a href="%link%">Sign in</a> and start creating new jobs or profile.' => '¿Ya tiene una cuenta? <a href="%link%">Registrate</a> y usa la plataforma.',
    'My Listings' => 'Mis registros',
    'Create' => 'Crear',
    'Favorites' => 'Favoritos',
    'Searches' => 'Busquedas',
    'Orders' => 'Ordenes',
    'Your Profile' => 'Tu perfil',
    'Change Password' => 'Cambiar contraseña',
    'Logout' => 'Cerrar sesion',
    'Shopping cart' => 'Carrito de compras',
    'Shopping Cart' => 'Carrito de Compras',
    'No products found' => 'No se enconro nada',
    'Back to homepage' => 'Regresa al inicio',
    'Saved Searches' => 'Busquedas guardadas',
    'Update Profile' => 'Actualizar Perfil',
    'Avatar image' => 'Imagen de perfil',
    'Select File' => 'Seleccionar imagen',
    'Country' => 'Pais',
    'First name' => 'Nombres',
    'Last name' => 'Apellidos',
    'Phone' => 'Telefono',
    'Website' => 'Sitio web',
    'Address' => 'Direccion',
    'Save' => 'Guardar',
    'Claim' => 'Pedir titularidad',
    'Favorite' => 'Hacer Favorito',
    'Post New Review' => 'Publica un consejo',
    'Description' => 'Descripcion',
    'Overview' => 'Visión general',
    'Service' => 'Servicio',
    'Pricing' => 'Precio',
    'Report listing' => 'Reportar establecimiento',
    'Get Direction' => 'Conseguir Direccion',
    'Photo Gallery' => 'Galeria de fotos',
    'Contact Owner' => 'Contactar con registrante',
    'Name' => 'Nombres',
    'Message' => 'Mensaje',
    'Send Message' => 'Enviar mensaje',
    'Create Report' => 'Crear reporte',
    'Report' => 'Reportar',
    'Create Listing' => 'Crear establecimiento',
    'Header' => 'Tipo de cabecera',
    'None' => 'Ninguno',
    'Single Image' => 'Solo una imagen',
    'Gallery' => 'Galeria',
    'Map' => 'Mapa',
    'Slug' => 'Enlace corto',
    'Video youtube' => 'Video de Youtube',
    'Opening hours' => 'Horario de apertura',
    'Fields' => 'Etiquetas',
    '__name__label__' => 'Nombre de etiquetas',
    'Data key' => 'Nombre de etiqueta',
    'Data value' => 'Valor de etiqueta',
    'Geolocation' => 'Geolocalización',
    'Search' => 'Buscar',
    'Latitude' => 'Latitud',
    'Longitude' => 'Longitud',
    'Taxonomies' => 'Taxonomia',
    'Category' => 'Categoria',
    'Location' => 'Localización',
    'Amenities' => 'Comodidades',
    'No ratings, yet.' => 'Sin calificaciones aun.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEs);

return $catalogue;
