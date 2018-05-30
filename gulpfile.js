/*
El API de Gulp es muy sencillo y consta 4 instrucciones básicas:
gulp.task(),
gulp.src(),
gulp.dest()
gulp.watch().
Posteriormente debemos crear un fichero llamado gulpfile.js, que debe de estar en la raíz del proyecto
 (y estar referenciado en la propiedad main del package.json de nuestro proyecto).
El gulpfile debe de contener una estructura con los siguientes elementos:
La importación de otros módulos
La importación de un fichero de configuración del proyecto (opcional)
La definición de las tareas
Observadores que se ejecutan en función de ciertos cambios (opcional)
Una tarea por defecto a ejecutar
*/

/*IMPORTANCION*/
var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;
var sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');



/*====== TAREA DE MIMIFICACIÓN ===========*/
gulp.task('tareaMinify', function() {
    console.log('minifiando js con tarea: tareaMinify');
    return gulp.src('./incjs/*.js')
        .pipe(concat('all.js'))
        .pipe(uglify({
            compress: {
                drop_console: true
            }
        }))
        .pipe(gulp.dest('./js'));

});

gulp.task('prefix', () => {

    gulp.src('sass/estilo.sass')

    .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(sass({
            includePaths: ['sass']
        }))
        .pipe(gulp.dest('css'));
});


gulp.task('cssTarea', function() {
    console.log('css tarea en accion');
});

gulp.task('browser-sync', function(done) {
    //watch files
    var files = [
        '*.php,css',
        '/*.css',
        './css/estilo.css',
        './css/frontpage.css',
        './*.php',
        './template/*.php',
        './inc/*.php',
        './inc/*.js',
        'libs/*.php',
        './incjs/*.js',
        './*.js',
        './woocommerce/*.php',
        './opincludes/*.php',
        './opincludes/*.js'
    ];

    //initialize browsersync
    browserSync.init(files, {
        //browsersync with a php server
        proxy: "localhost/orden/",
        notify: false
    });

    //gulp.watch("*.php,css/*.css,./*.php, ./sass/*.sass, ./css/*.css ").on('change', browserSync.reload);
    gulp.watch(files).on('change', browserSync.reload);

});

/*
gulp.task('serve', function() {
  browserSync.init({
      server: "./try"
  });
  gulp.watch("./sass/*.sass", ['sass']);
  gulp.watch("./*.php").on('change', browserSync.reload);
});
*/

gulp.task('sass', function() {
    return gulp.src('./sass/**/*.sass')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css'));
});

gulp.task('sass:watch', function() {
    gulp.watch('./sass/**/*.sass', ['sass']);
});


// Compile sass into CSS & auto-inject into browsers

gulp.task('sass', function() {
    return gulp.src("./sass/estilo.sass,./sass/frontpage.sass")
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest("./css"))
        .pipe(browserSync.stream());
});

gulp.task('watchMeJs', function() {
    gulp.watch('./js/*.js', ['tareaMinify'], function() {
        console.log('escucuando cambios js...');
    });
});

//gulp.task('default', ['sass', 'serve']);

gulp.task('default', ['browser-sync', 'watchMeJs', 'sass:watch', 'sass', 'prefix'], function(done) {
    console.log('ejecutando watch wuju....');
    browserSync.reload();
    done();
});