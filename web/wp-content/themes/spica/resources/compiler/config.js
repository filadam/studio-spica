module.exports = {
    context: 'assets',
    devtool: 'cheap-module-source-map',
    outputFolder: '../assets',
    publicFolder: 'assets',
    proxyTarget: 'https://studiospica.pl',
    watch: [
        '../**/*.php'
    ]
}