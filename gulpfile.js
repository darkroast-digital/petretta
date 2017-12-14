const gulp = require('gulp');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const notify = require('gulp-notify');
const browserSync = require('browser-sync');
const connect = require('gulp-connect-php');
const reload = browserSync.reload;
const postcss = require('gulp-postcss');
const sass = require('gulp-sass');
const ant = require('postcss-ant');
const autoprefixer = require('autoprefixer');
const htmlmin = require('gulp-htmlmin');
const rename = require('gulp-rename');

var paths = {
	scss: './src/assets/scss/**/*.scss',
	es: './src/assets/js/*.js',
	css: './build/assets/css',
	php: './build/*.php',
	bundle: './build/assets/js/',
	js: './build/assets/js/bundle.js',
    cssMin: './build/assets/css/*.css',
    htmlMinMain: ['src/*.php', '!src/mailer.php', '!src/careers-mailer.php'],
    htmlMinPlansroom: 'src/plansroom/*.php',
    htmlMinProjects: 'src/projects/*.php',
    htmlMinSnippets: 'src/snippets/*.php'
};

gulp.task('scripts', () => {
  return gulp.src([
    'src/assets/js/vendors/jquery-3.1.1.min.js',
    'src/assets/js/vendors/instafeed.min.js',
    'src/assets/js/vendors/slick.min.js',
    'src/assets/js/main.js'
    ])
    .pipe(concat('bundle.js'))
    .pipe(gulp.dest(paths.bundle))
    .pipe(notify({ message: 'Scripts Done', onLast: true }));
});

gulp.task('htmlMinMain', function(){
    return gulp.src(paths.htmlMinMain)
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest('./build'));
});

gulp.task('htmlMinPlansroom', function(){
    return gulp.src(paths.htmlMinPlansroom)
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest('./build/plansroom'));
});

gulp.task('htmlMinProjects', function(){
    return gulp.src(paths.htmlMinProjects)
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest('./build/projects'));
});

gulp.task('htmlMinSnippets', function(){
    return gulp.src(paths.htmlMinSnippets)
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest('./build/snippets'));
});

gulp.task('sass', () => {
	
	var processors = [
		ant,
		autoprefixer
	]
	
	return gulp.src('./src/assets/scss/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(postcss(processors))
		.pipe(gulp.dest('./build/assets/css'))
		.pipe(reload({
			stream: true
		}));
});

gulp.task('minifyCss', function(){
    return gulp.src(paths.cssMin)
        .pipe(htmlmin({collapseWhitespace: true}, {minifyCss: true}))
        .pipe(gulp.dest('./build/assets/css'));
});

gulp.task('serve', ['sass', 'scripts', 'minifyCss', 'htmlMinMain', 'htmlMinProjects', 'htmlMinPlansroom', 'htmlMinSnippets'], () => {
	
	
			browserSync({
				proxy: 'localhost:8888'
			});
		
		gulp.watch(paths.scss, ['sass']);
		gulp.watch(paths.es, ['scripts']);
        gulp.watch(paths.cssMin, ['minifyCss']);
        gulp.watch(paths.htmlMinMain, ['htmlMinMain']);
        gulp.watch(paths.htmlMinPlansroom, ['htmlMinPlansroom']);
        gulp.watch(paths.htmlMinProjects, ['htmlMinProjects']);
        gulp.watch(paths.htmlMinSnippets, ['htmlMinSnippets']);
		gulp.watch(paths.php).on('change', reload);

});

gulp.task('default', ['serve']);