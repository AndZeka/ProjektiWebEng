<?php

function component($productname, $productdescription, $productimg,$productprice,$productlearners,$productlessons,$productquizzes,$productid){
    $element = "
    <div class=\"courseItem block noPadding\">
    <form action=\"courses.php\" method=\"POST\">
        <a>
            <img src=\"$productimg\" id=\"python\" alt=\"Python 3 Course\" class=\"courseIcon\">
            <div class=\"courseDescription\">
                <div id=\"pythonTitle\">$productname</div>
                <p id=\"pythonText\">
                    $productdescription
                </p>
            </div>
        </a>
        <div class=\"courseStores\">
        <button type=\"submit\" name=\"add\">Add to cart   <i class=\"fas fa-shopping-cart\"></i></button>
        <input type=\"hidden\" name=\"productid\" value=\"$productid\">
        <p class=\"price\">$productprice$</p>
        </div>
        <div class=\"courseCounts\">
            <ul>
                <li>
                    <span>Learners</span>
                    <p>$productlearners</p>
                </li>
                <li>
                    <span>Lessons</span>
                    <p>$productlessons</p>
                </li>
                <li>
                    <span>Quizzes</span>
                    <p>$productquizzes</p>
                </li>
            </ul>
        </div>
    </form>
    </div>
    ";
    echo $element;
}

function cartElement($courseimg,$coursename,$coursedescription,$courseprice,$courseid){
    $element="
    <form action=\"cart.php?action=remove&ID=$courseid\" method=\"post\">
        <a>
            <img src=\"$courseimg\" id=\"python\" alt=\"Python 3 Course\" class=\"courseIcon\">
            <div class=\"courseDescription\">
            <div id=\"pythonTitle\">$coursename</div>
                <p id=\"pythonText\">
                    $coursedescription
                </p>
                <h2 class=\"price\">$courseprice$</h2>
            </div>
        </a>
        <div class=\"courseStores\">
            <button type=\"submit\" name=\"remove\" class=\"removeBttn\">Remove</button>
        </div>
        <hr>    
    </form>
    ";
    echo  $element;
}

function mainElements($productname,$productimg,$productdescription,$productid){
    $element= "
    <form action=\"home.php\" method=\"POST\">
    <div class=\"courseItem block noPadding\" >
        <a >
            <img src=\"$productimg\" alt=\"Python 3 Course\" class=\"courseIcon\">
            <div class=\"courseDescription\">
                <div>$productname</div>
                <p>
                    $productdescription
                </p>
            </div>
        </a>
        <div class=\"courseStores\">
            <button type=\"submit\" name=\"add\">Add to cart   <i class=\"fas fa-shopping-cart\"></i></button>
            <input type=\"hidden\" name=\"productid\" value=\"$productid\">
        </div>
    </div>
    </form>
    ";
    echo $element;
}