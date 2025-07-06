# HardWarePOS Point of Sale for WooCommerce

A comprehensive WordPress plugin that transforms your WooCommerce installation into a powerful and easy-to-use cash register system for any type of store or business.

## 🚀 Features

- **Complete POS System**: Turn your WooCommerce store into a full-featured point of sale system
- **Cash Drawer Integration**: Complete cash drawer support with documentation and testing tools
- **Fullscreen Print Support**: Optimized printing functionality for receipts
- **Multi-language Support**: Available in multiple languages (CA, DE, EL, ES, FR, IT, NL, PT)
- **Modern UI**: Clean and intuitive interface for efficient store operations
- **WooCommerce Integration**: Seamless integration with existing WooCommerce setup

## 📋 Requirements

- **WordPress**: 6.6 or higher
- **WooCommerce**: 9.6 or higher (tested up to 9.8)
- **PHP**: 7.4 or higher (recommended)

## 🔧 Installation

1. Download the plugin files
2. Upload to your WordPress site's `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Configure the settings in the WooCommerce POS section

## 📖 Documentation

### Cash Drawer Integration
- See `CASH-DRAWER-COMPLETE-GUIDE.md` for comprehensive cash drawer setup
- Use `cash-drawer-test.html` for testing cash drawer functionality
- Check `cash-drawer-documentation.md` for detailed documentation

### Testing
- `test-cash-drawer.php` - Cash drawer functionality tests
- `test-fullscreen-print.php` - Print functionality tests

## 🌍 Languages

Currently supported languages:
- Catalan (CA)
- German (DE)
- Greek (EL)
- Spanish (ES)
- French (FR)
- Italian (IT)
- Dutch (NL)
- Portuguese (BR)

## 🏗️ Development

### File Structure
```
HardWarePOS/
├── assets/          # CSS, JS, images, and other assets
├── includes/        # Core PHP classes and functions
├── languages/       # Translation files
├── templates/       # Template files
├── views/          # View files
├── tests/          # Test files
└── plugin-fw/      # Plugin framework
```

### Key Classes
- `YITH_POS` - Main plugin class
- `YITH_POS_Cash_Drawer` - Cash drawer functionality
- `YITH_POS_Fullscreen_Print` - Print functionality
- `YITH_POS_Orders` - Order management
- `YITH_POS_Products` - Product management

## 🔒 Security

This plugin follows WordPress security best practices:
- Proper data sanitization and validation
- Nonce verification for AJAX requests
- Capability checks for admin functions
- Secure file handling

## 📝 Changelog

### Version 3.14.0
- Current stable version
- Enhanced cash drawer integration
- Improved print functionality
- Updated language files

## 👥 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## 📞 Support

For support and more plugins, visit [LMDELM](https://tiliouan.dev.pages/)

## 📄 License

This plugin is licensed under the GPL v2 or later.

---

**Author**: LMDELM  
**Plugin URI**: https://tiliouan.dev.pages/  
**Text Domain**: hardwarepos-point-of-sale-for-woocommerce
