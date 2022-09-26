export const server = (done) => {
    app.plugins.browsersync.init({
        proxy: "casino",
        open: 'external',
        host: "localhost",
        port: 4000,
    });
}