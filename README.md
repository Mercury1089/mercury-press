# mercury-press
Website theme for Mercury1089's WordPress site

Made with HTML, PHP, SASS, JS, and lots of love.

## Gradle and Gulp Included
Gradle is a build tool commonly used with Java projects,
but can obviously serve to other languages. With it,
there is a plugin available that allows the wrapper
to come with it's own NPM/Node installation. As such,
Gulp is being used in conjunction with Gradle to provide
many tools for building web apps and such.

### Tools included
- [gulp-sass](https://github.com/dlmanning/gulp-sass)
- [gulp-sourcemaps](https://github.com/gulp-sourcemaps/gulp-sourcemaps)
- [postcss](https://github.com/postcss/postcss)
- [autoprefixer](https://github.com/postcss/autoprefixer)
- [cssnano](https://github.com/cssnano/cssnano)

### How to use
Gradle is checked into the project, so running Gradle tasks are as easy as
```
gradlew <task>
```


With the `gradle-node-plugin`, running Gulp tasks are as easy as
```
./gradlew gulp_<task>
```
Do note that because of the nature of Gradle, these tasks cannot take in arguments.



### Tasks
#### Gradle
- `compileSass`: Run-once compilation of all SASS files
- `watchSass`: Continuous watch over SASS edits, runs a SASS compile on every edit of SASS

#### Gulp
- `sass`: Compilation task for SASS, runs through autoprefixer and cssnano as well
- `sass:Watch`: Watch task that runs `sass` on SASS edits
