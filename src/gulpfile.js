const gulp = require('gulp');
const stylus = require('gulp-stylus');
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');
const terser = require('gulp-terser');
const browserSync = require('browser-sync').create();

// Пути
const paths = {
  styles: { src: 'src/stylus/**/*.styl', dest: 'dist/css' },
  scripts: { src: 'src/js/**/*.js', dest: 'dist/js' },
  html: { src: 'src/**/*.html', dest: 'dist/' }
};

// Компиляция Stylus → CSS
function styles() {
  return gulp.src(paths.styles.src)
    .pipe(stylus())
    .pipe(cleanCSS())
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(browserSync.stream());
}

// Объединение и минификация JS
function scripts() {
  return gulp.src(paths.scripts.src)
    .pipe(concat('app.min.js'))
    .pipe(terser())
    .pipe(gulp.dest(paths.scripts.dest))
    .pipe(browserSync.stream());
}

// Копирование HTML
function html() {
  return gulp.src(paths.html.src)
    .pipe(gulp.dest(paths.html.dest))
    .pipe(browserSync.stream());
}

// Сервер и наблюдение за файлами
function serve() {
  browserSync.init({ server: './dist' });
  gulp.watch(paths.styles.src, styles);
  gulp.watch(paths.scripts.src, scripts);
  gulp.watch(paths.html.src, html);
}

// Сборка
const build = gulp.series(gulp.parallel(styles, scripts, html));

exports.styles = styles;
exports.scripts = scripts;
exports.html = html;
exports.serve = serve;
exports.build = build;
exports.default = gulp.series(build, serve);
