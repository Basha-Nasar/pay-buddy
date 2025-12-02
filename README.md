```markdown
# PayBuddy

**PayBuddy** is a lightweight payment manager library built on [Yii2](https://www.yiiframework.com/).  
It provides a simple interface for handling and logging payments, and can be registered as a Yii component for seamless integration.

---

## 🚀 Installation

Install via [Composer](https://getcomposer.org/):

```bash
composer require basha-nasar/pay-buddy
```

If the package is not yet published on Packagist, you can require it directly from GitHub:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Basha-Nasar/pay-buddy"
    }
  ],
  "require": {
    "basha-nasar/pay-buddy": "dev-main"
  }
}
```

---

## 📂 Project Structure

```
pay-buddy/
├── composer.json
├── src/
│   └── PayBuddy.php
├── tests/
│   └── PayBuddyTest.php
└── README.md
```

---

## 🧑‍💻 Usage

### Standalone Example

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use BashaNasar\PayBuddy\PayBuddy;

$payBuddy = new PayBuddy();
echo $payBuddy->processPayment(100, 'USD');
```

Output:
```
Payment of 100 USD processed successfully.
```

---

### Yii2 Component Integration

Register PayBuddy as a component in your Yii2 configuration:

```php
return [
    'components' => [
        'payBuddy' => [
            'class' => \BashaNasar\PayBuddy\PayBuddy::class,
        ],
    ],
];
```

Then use it anywhere in your Yii2 app:

```php
Yii::$app->payBuddy->processPayment(250, 'EUR');
```

---

## 🧪 Testing

Run unit tests with [PHPUnit](https://phpunit.de/):

```bash
vendor/bin/phpunit tests
```

Example test (`tests/PayBuddyTest.php`):

```php
<?php
use PHPUnit\Framework\TestCase;
use BashaNasar\PayBuddy\PayBuddy;

class PayBuddyTest extends TestCase
{
    public function testProcessPayment()
    {
        $payBuddy = new PayBuddy();
        $result = $payBuddy->processPayment(50, 'EUR');
        $this->assertStringContainsString('50 EUR', $result);
    }
}
```

---

## 📜 License

This project is licensed under the [MIT License](LICENSE).

---

## 👤 Author

- **NasarBashaG**  
  Developer of PayBuddy  
  Email: your-email@example.com

---

## 🌟 Contributing

Contributions are welcome!  
1. Fork the repository  
2. Create a feature branch (`git checkout -b feature/my-feature`)  
3. Commit changes (`git commit -m "Add my feature"`)  
4. Push to branch (`git push origin feature/my-feature`)  
5. Open a Pull Request  

---

## 📦 Versioning

We use [Semantic Versioning](https://semver.org/).  
- `MAJOR` version for incompatible API changes  
- `MINOR` version for new functionality in a backwards-compatible manner  
- `PATCH` version for backwards-compatible bug fixes  

---

```

