#  Home work 4

<div align = "center">
<img src="/screens/hw04.png" width="100%">  
<br>
</div>

<p align="center">
<img src="https://img.shields.io/badge/PHP-7.3-orange.svg" alt="PHP-7.3"/>
<img src="https://img.shields.io/badge/Symfony-4.2.8-blue.svg">
<img src="https://img.shields.io/badge/licence-MIT-lightgray.svg" alt="Licence MIT"/>
</p>

## Информация для проверяющего
* решение для первого задания находится [здесь](TestArrayMemory.php)
* запуск из папки проекта производится при помощи консольной команды:
  ```
  php TestArrayMemory.php
  ```
* на php 7.3.3 один элемент массива занимает примерно 33.558608 байт. Стандартных 128 Мбайт приложению хватило
* для задачи №2 была использована версия php 5.6.40. Пришлось увеличить `memory_limit`  до 256 Мбайт, так как один элемент массива в ней занимает примерно 144.389096 байт
* решение задачи №4 находится [здесь](TestClassMemory.php). Использование памяти не превышает 856 байт. Это объясняется тем, что каждый раз при создании объекта ему дается одно и тоже имя. Поэтому предыдущий объект это имя теряет и уничтожается как бесхозный.
* я решил проверить так ли это на самом деле и добавил деструктор к [классу](SimpleClass.php). После запуска [теста](TestClassMemory.php) я убедился, что объекты уничтожаются
* далее я решил смоделировать ситуацию, когда объекты не уничтожаются. Это можно обеспечить, например, дав уникальное имя объекту. Консольная команда находится [здесь](SecondTestClassMemory.php) и её работа подтверждает, что ни один из объектов не уничтожается. В результате происходит переполнение выделенной процессу помяти и программа аварийно завершается




## Main functionality
* PSR-standards
* Composer


## Credits
* thanks to **Albert Stepantsev** and to his [awesome school](https://pr-of-it.ru/courses/php-3.html)

## License

This project is licensed under the MIT License.
