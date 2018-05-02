# preparethumb
working with PHPThumb in prepare snippet DocLister from Evolution CMS (ModX Evolution)

Usage: [[DocLister? &tvPrefix=`` &tvList=`doc_img` &tpl=`doc_prew_tpl` &prepare=`preparethumb` &phumb_img=`doc_prew_tpl` &phumb_options=`w=140,h=140,f=png,q=95,far=C,bg=ffffff`]]

DocLister template example: &lt;div class=&quot;img&quot;&gt;&lt;a href=&quot;[+image_def+]&quot;&gt;&lt;img src=&quot;[+image_thumb+]&quot; alt=&quot;&quot;/&gt;&lt;/a&gt;&lt;/div&gt;

Сниппет для работы совметно с DocLister в качестве обработчика данных перед выводом (prepare). 
Предназначен для удобной обработки изображений с помощью сниппета phpthumb(сжатие, обрезка и т.д.). 
Позволяет при вызове сниппета DocLister задать какой TV-параметр использовать (phumb_img) и параметры обработки изображения (phumb_options).
За счет использования плейсхолдеров [+image_def+] для исходного изображения и [+image_thumb+] для обработанного, позволяет использовать один и тот же чанк вывода для блоков с изображениями разного размера.
На данном этапе работает только с одним изображением.

Установка: скопировать содержимое файла snippet.preparethumb.php, выбрать в административной панели создать новый сниппет, вставить скопированный код, поставить флажек в поле "Анализировать DocBlock", нажать Сохранить
