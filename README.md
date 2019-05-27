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
* на **php 7.3.3** один элемент массива занимает примерно 33.558608 байт. Стандартных 128 Мбайт приложению хватило;
* для задачи №2 была использована версия **php 5.6.40**. Пришлось увеличить `memory_limit`  до 256 Мбайт, так как один элемент массива в ней занимает примерно 144.389096 байт;
* решение задачи №3 находится [здесь](https://github.com/eryshkov/php-2HW08/blob/91e8368def93825ccca15bd1eb83af3282362a7b/src/Repository/WordRepository.php#L26) самая длинная цепочка из 9 стрелочек;
* решение задачи №4 находится [здесь](TestClassMemory.php). Использование памяти происходило волнообразно. Плавно увеличивается до определенного значения, потом резкий спад использованного объёма. Это обусловнлено работой сборщика мусора. Он вычисляет циклические ссылки `$newObj->self = $newObj;` и делает очистку памяти от таких объектов. Сам сборщик мусора запускается автоматически при достижении значения `GC_ROOT_BUFFER_MAX_ENTRIES` в 10 000 штук по умолчанию. В **php 7.3.3** сборщик срабатывал на 2657208 байтах использования памяти;
* для задачи №4.3 была использована версия **php 5.6.40**. Принципиальных отличий от **php 7.3.3** в работе замечено не было.



## Main functionality
* meters memory usage


## Credits
* thanks to **Albert Stepantsev** and to his [awesome school](https://pr-of-it.ru/courses/php-3.html)

## License

This project is licensed under the MIT License.
