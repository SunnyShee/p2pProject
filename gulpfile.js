var gulp = require('gulp');

var path = require('path');

var less = require('gulp-less');

var sass = require('gulp-sass');

var cleanCSS = require('gulp-clean-css');
//压缩模块
var uglify = require("gulp-uglify");

var rename = require("gulp-rename");
var gutil=require("gulp-util");


//引入babel模块，编译es6
var babel=require("gulp-babel");
//console.log("引入babel模块",babel);

//热点刷新模块：
var livereload = require("gulp-livereload");



//配置默认任务：
gulp.task('default',() => {
   // console.log('hello gulp!!!')
    livereload.listen()
    //监听:less，sass，js,并调用对应的任务
    gulp.watch("./src/less/*.less",["lessTask"]);
    gulp.watch("./src/js/*.js",["uglifyJs"]); 
});

//gulp-less:lessTask
gulp.task('lessTask',() => {
    return  gulp.src('./src/less/*.less')
    .pipe(less({
        paths: [ path.join(__dirname, 'less', 'includes') ]
      }))
    .pipe(cleanCSS()) //2调用压缩插件的方法
    .pipe(rename((path) => {
        path.basename += ".min"; //文件名： 原来的文件名+新增的文件
    })) //重命名
    .pipe(gulp.dest('./dist/css/minCss')) //输出路径
    .pipe(livereload()); //开启热刷新
})

//gulp-uglify&gulp-rename:uglifyJS
gulp.task("uglifyJs", () => {
    //源文件
    gulp.src('./src/js/*.js') 
        .pipe(babel({
            presets: ['@babel/env']
        })) 
         //插件方法调用
        .pipe(uglify()) 
         //重命名方法调用
        .pipe(rename((path) => {
            //文件名： 原来的文件名+新增的文件
            path.basename += ".min"; 
          }))
          .on('error', function (err) {
            gutil.log(gutil.colors.red('[Error]'), err.toString());
        })
          //输出目标
        .pipe(gulp.dest('./dist/js'))
        .pipe(livereload()); //开启热刷新
});





