module.exports = {
  transpileDependencies: [
  ],
  devServer: {
    proxy: {
      '^/api': {
        target: 'http://prinder-api',
        changeOrigin: true,
        ws: false,
        secure:false,
      },
    }
  }
}