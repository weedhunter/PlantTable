
# PlantTable

**PlantTable** is a PHP library/application for managing plant data, including seed names, fertilizers, and soil types. It can generate Excel tables for agricultural planning, research, or educational purposes.

## Features

- Add and manage plant data (seed names, fertilizers, soil types)
- Export data as formatted Excel tables
- Easy integration with other PHP projects
- Composer autoload support

## Requirements

- PHP 7.4 or higher
- [Composer](https://getcomposer.org/)
- [PhpSpreadsheet](https://phpspreadsheet.readthedocs.io/) (for Excel export)

## Installation

Clone the repository:

```bash
git clone https://github.com/weedhunter/PlantTable.git
cd PlantTable
```

Install dependencies with Composer:

```bash
composer install
```

## Usage

### Basic Example

```php
require 'vendor/autoload.php';

use PlantTable\PlantTableManager;

// Create a new PlantTableManager instance
$manager = new PlantTableManager();

// Add plant data
$manager->addPlant('Corn', 'NPK 15:15:15', 'Loamy');
$manager->addPlant('Wheat', 'Urea', 'Sandy');

// Export to Excel
$manager->exportToExcel('plant_table.xlsx');
```

### Output

The above code will generate an Excel file (`plant_table.xlsx`) with a table containing your plant data.

## Project Structure

```
PlantTable/
├── src/
│   └── PlantTableManager.php
├── examples/
│   └── basic_example.php
├── composer.json
└── README.md
```

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

