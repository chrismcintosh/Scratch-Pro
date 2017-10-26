module.exports = {
     entry: './assets/js/app.js',
     output: {
         path: '/',
         filename: 'bundle.js'
     },
     externals: {
       jquery: 'jQuery'
     },
     module: {
       loaders: [
       ],
       rules: [
         // JS LOADER
         // Reference: https://github.com/babel/babel-loader
         // Transpile .js files using babel-loader
         // Compiles ES6 and ES7 into ES5 code
         {
           test: /\.js$/,
           use: [
             {
               loader: 'babel-loader',
             }
           ],
         }
       ]
     }
   };