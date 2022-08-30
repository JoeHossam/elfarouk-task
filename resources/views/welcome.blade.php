<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <nav class="nav">
            <div>
                <ul>
                    <li>الطلاب المحتملين</li>
                    <li>الطلاب الحاليين</li>
                    <li>الجامعة وطاقم العمل</li>
                    <li>الخريجين</li>
                    <li><button>البحث</button></li>
                </ul>
            </div>
            <div>اتصل على: 000-123-456-789</div>
        </nav>
        <section>
            <header id="main-section">
                <ul>
                    <li>الرئيسية</li>
                    <li>الكورسات</li>
                    <li>الأحداث</li>
                    <li>عن الجامعة</li>
                    <li>مقالات</li>
                    <li>صفحات</li>
                    <li>اتصل بنا</li>
                </ul>
            </header>
            <div class="wrapper">
                <div class="container">
                    <h2>انضم إلى مجتمع الطلاب ذوي التفكير الحديث</h2>
                    <form>
                        <div>
                            <input type="text" placeholder="الاسم الكامل">
                            <input type="email" placeholder="البريد الإلكتروني">
                        </div>
                        <div>
                            <select>
                                <option value="" selected disabled hidden>مستويات الدراسة</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                            <select>
                                <option value="" selected disabled hidden>الدرجات</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div>
                            <button>تسجيل</button>
                        </div>
                        
                    </form>
                </div>
                <div id="grey-box">
                </div>
            </div>
            <div id="uni-img">
                <img src="/img.png">
            </div>
        </section>

        <section id="second-section">
            <div  id="news">
                <h2 class="title">الأخبار</h2>
                <span class="c-black" id="date">08-24-2014</span>
                <p class="c-black">مدرسة U-M للصحة العامة ، يهدف شركاء ديترويت إلى تحسين جودة الهواء في المدينة</p>
            </div>
            <div id="events">
                <div class="dflex justify-between">
                    <h2 class="title">الأخبار</h2>
                    <div>التقويم</div>
                </div>
                <div class="dflex">
                    <img src="/18.png" alt="">
                    <div>
                        <h4>معرض المعهد الموسيقي: حديقة الهند دولة وثقافة ننكشف</h4>
                        <div>حديقة ماتاي النباتية</div>
                    </div>
                </div>
            </div>
            <div id="about">
                <h2 class="title">عن الجامعة</h2>
                <div id="grey-box-2"></div>
            </div>
        </section>
    </body>
</html>
