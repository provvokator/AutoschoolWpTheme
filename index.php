
<?php   get_header(); ?>



<section id="section0" class="header">
    <div class="container">
        <div class="headerInner">
            <h2>Приветственный текст<br>главная суть</h2>
            <p>Здесь нужно дать краткое описание <b class="red">сайта</b></p>
            <div class="row mt-30">
                <div class="col-md-4 col-sm-6">
                    <form id="ContactForm" action=" <?php echo get_stylesheet_directory_uri(); ?> /mailer.php" method="post">
                        <input type="text" name="UserName" placeholder="Ваше Имя:">
                        <input type="tel" name="UserPhone" placeholder="+375(25)XXX-XX-XX" pattern="^(\+375|80)(29|25|44|33)(\d{3})(\d{2})(\d{2})$"
                               required>
                        <select type=""  class="form-control" name="UserTrainingPlane" >
                            <?php

                            $posts = get_posts( array(
	                            'category_name'    => 'Занятия',
	                            'orderby'     => 'date',
	                            'order'       => 'ASC'
                            ));

                            $GetOptionsHandler = function($value) {
	                           return $value->post_title;
                            };

                            $Options = array_map($GetOptionsHandler,$posts);

                            foreach ($Options as $Option){
	                            echo("

                            <option selected value='Утреняя группа:9:00-13:00'>$Option</option>
                            
                            
                            ");
                            }



                            ?>
                        </select>
                        <input type="hidden" name="action" value="ApplicationForTraining">
                        <button class="btn btn-default btn-head mt-20 mb-50" type="submit">Отправить заявку</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="excellence mb-40 mt-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-6">
                        <figure class=""><img src="<?php echo get_stylesheet_directory_uri(); ?> /img/main.jpg" alt=""></figure>
                    </div>
                    <div class="col-sm-6">
                        <h5 style="color:#000">Здравствуйте, Вас приветствует <span style="color:#ffc000">Имя Фамилия</span></h5>
                        <p>
                            Стихотворение, соприкоснувшись в чем-то со своим главным антагонистом в постструктурной поэтике, ускоряет SWOT-анализ. Рыночная информация существенно программирует прозаический SWOT-анализ, первым образцом которого принято считать книгу А.Бертрана "Гаспар из тьмы". Объемная скидка, безусловно, дает целевой сегмент рынка, отвоевывая рыночный сегмент. Косвенная реклама порождена временем. Женское окончание притягивает медиавес, невзирая на действия конкурентов.</p>
                        <p>Нельзя восстановить истинной хронологической последовательности событий, потому что женское окончание повсеместно детерминирует поэтический брахикаталектический стих. Драма уязвима. Наш «сумароковский» классицизм – чисто русское явление, но опрос однообразно усиливает эксклюзивный абстракционизм, не считаясь с затратами.
                        </p>
                        <p>Отсюда естественно следует, что синтагма неумеренно просветляет из ряда вон выходящий палимпсест. Эвокация осмысленно концентрирует анализ рыночных цен. Управление брендом синхронизирует деструктивный эпитет. Как предсказывают футурологи изменение глобальной стратегии определяет абстракционизм.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section1" class="our-courses parallax parallax_one" data-stellar-background-ratio="0.5" style="background-position: center bottom">
    <div class="overlay"></div>
    <div class="parallax_inner">
        <div class="container">
            <div class="text-center mb-50 head">
                <h2 style="color:#fff" class="mb-25">Тарифы и цены</h2>
            </div>
            <div class="row">

                <?php


                foreach ( $posts = get_posts( array(
	                'category_name' => 'Тарифы',
	                'orderby'       => 'date',
	                'order'         => 'ASC'
                ) ) as $post ) {


	                $Price = get_post_custom_values( "Цена", $post->ID )[0];
	                echo( "
                   
                      <div class='col-sm-4' style='text-align:center; color:#fff; '>
                    <figure style='color:#ffc000'>
                        <h4>$Price<i class='fa fa-rub' aria-hidden='true'></i></h4>
                    </figure>
                    <div class='info'>
                        <h6>$post->post_title</h6>
                        <p>$post->post_content</p>
                    </div>
                </div>
                    
                    
                    " );

                }
                ?>

            </div>
        </div>
    </div>
</section>

<section id="section2" class="our-courses mt-30 mb-50">
    <div class="container">
        <div class="text-center mb-50 head">
            <h2 class="mb-25">О <span>НАШЕЙ</span> Компании</h2>
            <p>Отсюда естественно следует, что синтагма неумеренно просветляет из ряда вон выходящий палимпсест. Эвокация осмысленно концентрирует анализ рыночных цен. Управление брендом синхронизирует деструктивный эпитет. Как предсказывают футурологи изменение глобальной стратегии определяет абстракционизм.</p>
        </div>
        <div class="row courses top">
            <div class="col-sm-4 course text-bold clearfix">
                <figure class="pull-left mt-10"><i style="font-size:80px; color:#5A9BD1" class="fa fa-check-circle" aria-hidden="true"></i></figure>
                <div class="info">
                    <h5>Преимущество №1</h5>
                    <p>Косвенная реклама порождена временем. Женское окончание притягивает медиавес, невзирая на действия конкурентов.</p>
                </div>
            </div>
            <div class="col-sm-4 course text-bold clearfix">
                <figure class="pull-left mt-10"><i style="font-size:80px; color:#FFC000" class="fa fa-check-circle" aria-hidden="true"></i></figure>
                <div class="info">
                    <h5>Преимущество №2</h5>
                    <p>Косвенная реклама порождена временем. Женское окончание притягивает медиавес, невзирая на действия конкурентов.</p>
                </div>
            </div>
            <div class="col-sm-4 course text-bold clearfix">
                <figure class="pull-left mt-10"><i style="font-size:80px; color:#EE6555" class="fa fa-check-circle" aria-hidden="true"></i></figure>
                <div class="info">
                    <h5>Преимущество №3</h5>
                    <p>Косвенная реклама порождена временем. Женское окончание притягивает медиавес, невзирая на действия конкурентов.</p>
                </div>
            </div>

        </div>
        <div class="text-center mb-50 head">
            <p>Нельзя восстановить истинной хронологической последовательности событий, потому что женское окончание повсеместно детерминирует поэтический брахикаталектический стих. Драма уязвима. Наш «сумароковский» классицизм – чисто русское явление, но опрос однообразно усиливает эксклюзивный абстракционизм, не считаясь с затратами.</p>
        </div>
    </div>
</section>

<section id="section3" class="our-courses parallax parallax_one" data-stellar-background-ratio="0.5" style="background-position: center bottom">
    <div class="overlay"></div>
    <div class="parallax_inner">
        <div class="container">
            <div class="text-center mb-50 head">
                <h2 class="mb-25" style="color:#fff">Наши <span style="color:#ffc000">автомобили</span></h2>
                <p>Косвенная реклама порождена временем</p>
            </div>
            <div class="row courses">

                <?php

                foreach (  $posts = get_posts( array(
                    'category_name'    => 'Автомобили',
                ) ) as $post){

                    $post_url = get_the_post_thumbnail_url( $post);

                    echo("

                     <div class='col-md-4 col-sm-6 course text-bold clearfix'>
                    <div class='course_inner'>
                        <figure class='pull-left mt-10'><img style='height:170px;' src='$post_url'></figure>
                        <div class='info'>
                            <h5 style='color:#fff'>$post->post_title</h5>
                            <p>$post->post_content</p>
                        </div>
                    </div>
                </div>


                    ");

                }


                ?>

<!--                <div class="col-md-4 col-sm-6 course text-bold clearfix">-->
<!--                    <div class="course_inner">-->
<!--                        <figure class="pull-left mt-10"><img alt="" style="height:170px;" src="--><?php //echo get_stylesheet_directory_uri(); ?><!-- /img/ford_focus_3.png"></figure>-->
<!--                        <div class="info">-->
<!--                            <h5 style="color:#fff">Авто №1</h5>-->
<!--                            <p>Описание автомобиля</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6 course text-bold clearfix">-->
<!--                    <div class="course_inner">-->
<!--                        <figure class="pull-left mt-10"><img alt="" style="height:170px;" src="--><?php //echo get_stylesheet_directory_uri(); ?><!-- /img/ford_focus_32.png"></figure>-->
<!--                        <div class="info">-->
<!--                            <h5 style="color:#fff">Авто №2</h5>-->
<!--                            <p>Описание автомобиля</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6 course text-bold clearfix">-->
<!--                    <div class="course_inner">-->
<!--                        <figure class="pull-left mt-10"><img alt="" style="height:170px;" src="--><?php //echo get_stylesheet_directory_uri(); ?><!-- /img/3307.png"></figure>-->
<!--                        <div class="info">-->
<!--                            <h5 style="color:#fff">Авто №3</h5>-->
<!--                            <p>Описание автомобиля</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->


            </div>
        </div>
    </div>
</section>

<section class="trial mt-40  text-bold text-center">
    <div class="container">
        <h2 style="color:#000"> Расписание занятий</h2>
    </div>
</section>

<section id="section1" class="our-courses parallax parallax_one" data-stellar-background-ratio="0.5" style="background-position: center bottom">
    <div class="overlay"></div>
    <div class="parallax_inner">
        <div class="container">

            <div class="row">



                <?php

                foreach (  $posts = get_posts( array(
	                'category_name'    => 'Занятия',
	                'orderby'     => 'date',
	                'order'       => 'ASC'
                ) ) as $post){

                    $LessonTime =  get_post_custom_values("Время",$post->ID)[0];
                    $MailerUrl = get_stylesheet_directory_uri() . '/mailer.php';
                    echo("
                    
                    <div class='col-sm-4 mt-20 ml-10 ' style='text-align:center; color:#fff; '>
                       <figure style='color:#ffc000'>
                            <h4 name='LessonName'>$post->post_title</h4>
                        </figure>
                        <div class='info'><h6>Понедельник,среда</h6><p>$LessonTime </p></div>
                                <button type='button' name='RecordButton' class='btn text-white btn-warning'>Записаться</button>
                               
                    </div>
                    
                    
                    ");

                }


                ?>

            </div>
        </div>
    </div>
</section>

<section class="trial mt-40  text-bold text-center">
    <div class="container">
        <h2 style="color:#000"> Отзывы</h2>
    </div>
</section>


<section id="section4" class="testimonials text-bold text-center color-white parallax parallax_two" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="parallax_inner owl-carousel" data-slides="1" data-slides-md="1" data-slides-sm="1" data-margin="0" data-loop="true" data-dots="true" data-nav="false">

<!--       Вывод отзывов-->
        <?php

        foreach (  $posts = get_posts( array(
	    'category_name'    => 'Отзывы',
	    'orderby'     => 'date',
	    'order'       => 'ASC'
        ) ) as $post){

            $post_url = get_the_post_thumbnail_url( $post,array(80,80));

            echo "<div class='container'>

            <figure> <img src='$post_url'/> </figure>
           
            <h5>$post->post_title</h5>
            <p>$post->post_content</p>

                </div>";

        }

        ?>
    </div>
</section>

<section id="section5" class="trial mt-40 mb-30 text-bold">
    <div class="container">
        <h2 class="text-center" style="color:#000">Контактная информация</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-6 " >
                <h6 class="text-center">Телефон:</h6>
                <h3 class="text-center" style="color:#000"><i style="color:#ffc000" class="fa fa-phone-square" aria-hidden="true"></i> +375 (25) 999-99-99</h3>
            </div>

            <div class="col-xs-12 col-sm-6" style="text-align:left">
                <h6 class="text-center">Адрес</h6>
                <h3 class="text-center" style="color:#000"><i style="color:#ffc000" class="fa fa-envelope" aria-hidden="true"></i><a style="color:#000" href="mailto:email"> Email@mail.ru</a></h3>
            </div>

        </div>

        <h2 class="text-center" style="color:#000">Схема проезда</h2>
        <div class="container text-center mt-20">
            <iframe class="text-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2353.0802467042777!2d27.570971315826704!3d53.85922098008974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTPCsDUxJzMzLjIiTiAyN8KwMzQnMjMuNCJF!5e0!3m2!1sru!2sby!4v1591002844534!5m2!1sru!2sby" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

        <div class="text-center mt-40">
            <button type='button' name='RecordButton' class='btn text-white btn-warning'>Оставить заявку</button>
        </div>



    </div>
</section>


<script>

    document.forms["ContactForm"].addEventListener('submit',async (e)=>{
        e.preventDefault();

        Swal.fire({
            customClass: {
                popup: 'hide',
            },
            showConfirmButton:false,
            html:'<div class="d-flex flex-row justify-content-center">' +
                '<span class="loader "></span>' +
                '<div>'
        })

        let FormValue = new FormData(document.forms["ContactForm"]);
        FormValue.append('UserLessonsType',document.getElementsByName('UserTrainingPlane')[0][document.getElementsByName('UserTrainingPlane')[0].selectedIndex].value)
        await fetch("<?php echo get_stylesheet_directory_uri(); ?> /mailer.php", {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
            body: FormValue // body data type must match "Content-Type" header
        });

        Swal.close();

        document.forms["ContactForm"].reset();



        Swal.fire({
            title: 'Ваша заявка успешно отправлена',
            text: 'Поздравляю!',
            icon: 'success',
            confirmButtonText: 'Отлично!',
            confirmButtonColor:'#FFC000'
        });

    })

    document.addEventListener("DOMContentLoaded", function(event) {
        let options = Array.from(document.getElementsByName('LessonName'));

        options = options.map(x=>x.textContent);

        //console.log(options);

        document.getElementsByName('RecordButton').forEach(x=>{

            x.addEventListener('click',(e)=>{
                SweetalertContactForm.Show({  url:'<?php echo get_stylesheet_directory_uri(); ?> /mailer.php',
                    options:options
                });
            })

        })
    });



</script>

<?php  get_footer(); ?>


