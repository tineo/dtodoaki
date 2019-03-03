var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', done => {
    gulp.src('./src/DirectoryPlatform/FrontBundle/Resources/public/scss/styles.scss')
        .pipe(sass())
        .pipe(gulp.dest('./src/DirectoryPlatform/FrontBundle/Resources/public/css/'));

    gulp.src('./src/DirectoryPlatform/AdminBundle/Resources/public/scss/styles.scss')
        .pipe(sass())
        .pipe(gulp.dest('./src/DirectoryPlatform/AdminBundle/Resources/public/css/'));
    
    done();

});

gulp.task('watch', function() {
    gulp.watch('./src/DirectoryPlatform/AppBundle/Resources/public/scss/**/*.scss', ['sass']);
    gulp.watch('./src/DirectoryPlatform/AppBundle/Resources/public/scss/*.scss', ['sass']);

    gulp.watch('./src/DirectoryPlatform/FrontBundle/Resources/public/scss/**/*.scss', ['sass']);
    gulp.watch('./src/DirectoryPlatform/FrontBundle/Resources/public/scss/*.scss', ['sass']);

    gulp.watch('./src/DirectoryPlatform/AdminBundle/Resources/public/scss/**/*.scss', ['sass']);
    gulp.watch('./src/DirectoryPlatform/AdminBundle/Resources/public/scss/*.scss', ['sass']);
});