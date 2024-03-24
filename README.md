# Демо. Паттерны проектирования

## Консольный проект

УСТАНОВКА
------------

Из директории проекта на хост-машине запустите:
```bash
make
```

После установки скрипт автоматом переведет в контейнер для ввода команд.

Если контейнеры не запущены:
```bash
make up
make enter
```

# Реализация

<p align="right"><i>...если что, работает автокомплит.</i></p>

## Модуль _creational_. Порождающие паттерны.

### Фабричный метод.
<b><u>Тематика:</u></b> [блюда японской кухни](https://github.com/s-drozdov/demo-design-patterns/blob/main/modules/creational/commands/FactoryMethodController.php).
```bash
php yii creational/factory-method
```

### Абстрактная фабрика.
<b><u>Тематика:</u></b> [туристический бот](https://github.com/s-drozdov/demo-design-patterns/blob/main/modules/creational/commands/AbstractFactoryController.php).
```bash
php yii creational/abstract-factory
```

### Строитель. Директор.
<b><u>Тематика:</u></b> [открываем пиццерию, генератор меню](https://github.com/s-drozdov/demo-design-patterns/blob/main/modules/creational/commands/BuilderController.php).

Выпекаем рандомную пиццу:
```bash
php yii creational/builder
```
Просмотр отчета по всем рецептам для пиццы стандартного размера: 
```bash
php yii creational/builder/get-all
```
