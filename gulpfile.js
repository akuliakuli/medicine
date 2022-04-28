var gulp = require("gulp");
var rename = require("gulp-rename");
var sourcemaps = require("gulp-sourcemaps");
const sass = require('gulp-sass')(require('sass'));
var projectFolder = "main";
var browsersync = require("browser-sync").create();

function copy(done){
    
    gulp.src("css/**/*.css")
         .pipe(sourcemaps.init())
         .pipe(sass({
             errorLogToConsole:true,
             outputStyle:"compressed"
         }))
         .on('error',console.error.bind(console))
        .pipe(rename({suffix:".min"}))
        .pipe(sourcemaps.write('/'))
        .pipe(gulp.dest("gulp/"))
        .pipe(browsersync.stream())

    done()
}


function watchFiles(){
    gulp.watch("css/**/*",copy)
    gulp.watch("./**/*.html",browserReload)
    gulp.watch("./**/*.php",browserReload)
    gulp.watch("./**/*.js",browserReload)
}

function browserReload(done){
    browsersync.reload();
    done()
}
function browserSync(done){
    browsersync.init({
        server:{
            baseDir:"../tubik/"
        },
        port: 3000
    })
    done()
}
//gulp.series(many different tasks in order)

gulp.task('default',gulp.series(copy,watchFiles))