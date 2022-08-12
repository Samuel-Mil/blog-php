<?php
    /**
     * @var App\Core\View $this
     */
     $this->setStyleSheet('home');
     $this->subTitle = 'Home';
?>

<section class="about">
    <img class="user_image" src="https://github.com/samuel-mil.png" alt="name">
    <div class="user_infos">
        <h1>Samuel Milhomens</h1>
        <strong>Programador | CEO</strong>
    </div>
    <div class="user_description">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ad dolores dignissimos voluptates reiciendis magni quo inventore cumque saepe qui est, totam libero. Tenetur excepturi ipsa, nihil pariatur aspernatur corporis.</p>
    </div>
</section>

<section class="posts_container">
    <?php for($i = 0; $i < 5; $i++): ?>
    <div class="post_single">
        <h1 class="post_title">
            <a href="#">Como aprender a sua primeira linguagem de programação</a>
        </h1>

        <div class="post_infos">
            <div class="post_date">
                <i class="fa-solid fa-calendar-days"></i>
                <span>10/04/22</span>
            </div>

            <div class="post_tag">
                <i class="fa-solid fa-tag"></i>
                <span>Programação</span>
            </div>
        </div><!--post_infos-->

        <img class="post_image" src="https://www.aulasdejapones.com.br/wp-content/uploads/2020/04/Blog-Japon%C3%AAs-do-Dia-a-Dia-9-600x315.png" alt="background">

        <div class="post_content_preview">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod numquam magni possimus expedita iure nisi nesciunt, rem dolorem quis repellendus quam laudantium iste esse error sed? Natus impedit at pariatur?</p>
        </div>

        <a class="post_btn" href="#">Ler mais</a>
    </div>
    <?php endfor; ?>
</section>