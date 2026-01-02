const { src, dest, watch, series, parallel } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sassGlob = require('gulp-sass-glob-use-forward');
const autoprefixer = require("autoprefixer");
const cssdeclsort = require("css-declaration-sorter");
// const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');
const imagemin = require('gulp-imagemin');
const plumber = require('gulp-plumber');
const notify = require('gulp-notify');
const browserSync = require('browser-sync').create();
const pngquant = require('imagemin-pngquant');
const pixrem = require('pixrem');
const postcss = require('gulp-postcss');
const replace = require('gulp-replace');
const combineMq = require('postcss-combine-media-query');


function styles() {
  return src('../src/scss/style.scss')
    .pipe(plumber({ errorHandler: notify.onError('Error: <%= error.message %>') }))
    .pipe(sourcemaps.init())
    .pipe(sassGlob())
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([
      autoprefixer({ grid: true }),
      cssdeclsort({ order: "alphabetical" }),
      require('postcss-preset-env')({  stage: 0 }),
      pixrem({atrules: true}),
      combineMq()
    ]))
    // .pipe(cleanCSS())  //cssの圧縮を行う
    .pipe(sourcemaps.write('.'))
    .pipe(dest('../assets/css'))
    .pipe(browserSync.stream());
}

function images() {
  return src('../src/images/**/*')
    .pipe(imagemin([
      imagemin.mozjpeg({ quality: 80 }),
      imagemin.svgo({ plugins: [{ removeViewBox: false }] }),
      pngquant({ quality: [0.65, 0.8] })
    ]))
    .pipe(dest('../assets/images'));
}

function javascript() { return src('../src/js/**/*')
    .pipe(dest('../assets/js'));
}

function fonts() {
  return src('../src/fonts/**/*')
    .pipe(dest('../assets/fonts'));
}

function movie() {
  return src('../src/movie/**/*')
    .pipe(dest('../assets/movie'));
}

const browserSyncOption = {
  proxy: "http://soukessou.local/ ",// ローカルにある「Site Domain」に合わせる
  notify: false,// ブラウザ更新時に出てくる通知を非表示にする
}

function watchFiles() {
  browserSync.init(browserSyncOption);
  watch('../src/scss/**/*.scss', styles);
  watch('../src/images/**/*', images);
  watch('../src/js/**/*.js', javascript);
  watch('../src/fonts/**/*', fonts);
  watch('../src/movie/**/*', movie);
  watch('../**/*.php').on('change', browserSync.reload);
}

// 新しい PostCSS タスク
// function cssPostProcess() {
//     const processors = [
//         pixrem()
//     ];
//     return src('./src/*.css')
//         .pipe(postcss(processors))
//         .pipe(dest('./dest'));
// }

exports.styles = styles;
exports.images = images;
exports.javascript = javascript;
exports.fonts = fonts;
exports.movie = movie;
exports.watch = watchFiles;
// exports.cssPostProcess = cssPostProcess; // 新しいタスクをエクスポート
exports.default = parallel(styles, images, javascript, fonts, movie, watchFiles);

// pixremの設定を変更するタスク
function modifyPixrem() {
    return src('node_modules/pixrem/lib/pixrem.js') // ファイルのパスを更新
        .pipe(replace('options.atrules       = (opts.atrules       !== undefined) ? opts.atrules       : false;', 'options.atrules       = (opts.atrules       !== undefined) ? opts.atrules       : true;'))
        .pipe(dest('node_modules/pixrem/lib/'));  // 保存するディレクトリを更新
}

exports.modifyPixrem = modifyPixrem;
