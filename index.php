<?php include 'header.php';?>
    <section class="form-page" style="padding-top: 30px;padding-bottom: 80px;">
        <div class="container" style="background-color:white;padding-bottom: 100px;max-width: 720px">
        <div class="row">
                <label id="main_label" class="col-md-12 text-center section-padding-80-0">
                    <h4 data-translate="translate" data-caption="cal_title">Страхование для туристов</h4>
                </label>
            <form id="main_form" method="post" action="/" enctype="multipart/form-data">
                    <div class="col-md-12">
                            <!-- Программы поездки -->
                            <div class="form-group input-group mb-3">
                                <label for="exampleInputEmail1" class="custom_label" data-translate="translate" data-caption="program_title">Выберите программу поездки</label>
                                <select class="custom-select rounded-0" id="programs" name="programs" >
                                    <option></option>
                                    <option value="base" data-translate="translate" data-caption="program_value_1">Однократная (только одна страна)</option>
                                    <option value="multi" data-translate="translate" data-caption="program_value_2">Многократная (несколько стран)</option>
                                </select>
                            </div>
                            <!--Страна поездки-->
                            <div class="form-group input-group mb-3 ">
                                <label for="exampleInputEmail1" class="custom_label" data-translate="translate" data-caption="country_title">Укажите страну</label>
                                <select class="form-control rounded-0" id="country" name="country[]" data-zone="" data-name-lat="" >
                                    <option id="empty" selected></option>
                                </select>
                            </div>
                            <!--Страховая сумма-->
                            <div class="form-group input-group mb-3 ">
                                <label for="exampleInputEmail1" class="custom_label" data-translate="translate" data-caption="sum_title">Страховая сумма</label>
                                <select name="insured_sum" class="form-control " id="ssum" >
                                    <option selected></option>
                                    <option id="15k" value="15k">15 000 </option>
                                    <option id="30k" value="30k">30 000 </option>
                                    <option id="50k" value="50k">50 000 </option>

                                </select>
                            </div>
                            <!--Продолжительность поездки Для тарифа BAse-->
                            <div class="form-group input-group mb-3 border border-secondary " id="days-cont">
                                <div class="input-group">
                                    <label for="exampleInputEmail1" class="custom_label" data-translate="translate" data-caption="period_title">Укажите период действия страховки</label>
                                    <input placeholder="Начало" data-translate="translate" data-caption="period_start" type="text" class="border_color form-control" id='start' name="start" readonly="readonly"/>
                                    <input placeholder="Конец" data-translate="translate" data-caption="period_end" type="text" class="border_color form-control" id='end' name="end" readonly="readonly"  />
                                </div>
                            </div>
                            <!--Продолжительность поездки Для тарифа MUlti-->
                            <div class="form-group input-group mb-3 months-cont " style="display: none" id="">
                                <label for="exampleInputEmail1" class="custom_label" data-translate="translate" data-caption="days_title">Укажите срок действия страховки</label>
                                <div class="input-group">
                                    <select name="months" id="months" class="form-control " >
                                        <option selected></option>
                                        <option value="1" data-translate="translate" data-caption="days_title_value_1">1 месяц (дней не более 15)</option>
                                        <option value="3" data-translate="translate" data-caption="days_title_value_2">3 месяца (дней не более 30)</option>
                                        <option value="6" data-translate="translate" data-caption="days_title_value_3">6 месяцев (дней не более 45)</option>
                                        <option value="6p" data-translate="translate" data-caption="days_title_value_4">6 месяцев (дней не более 90)</option>
                                        <option value="12" data-translate="translate" data-caption="days_title_value_5">12 месяцев (дней не более 90)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group input-group mb-3 border border-secondary months-cont " style="display: none" id="">
                                <div class="input-group">
                                    <label for="exampleInputEmail1" class="custom_label" data-translate="translate" data-caption="period_title">Укажите период действия страховки</label>
                                    <input type="text" data-translate="translate" data-caption="period_start" class="border_color form-control" id='start_multi' name="start_multi" readonly="readonly"  >
                                    <input type="text" data-translate="translate" data-caption="period_end" class="border_color form-control" id='end_multi' name="end_multi" readonly="readonly">
                                </div>
                            </div>
                            <!--Цель поездки-->
                            <div class="form-group input-group mb-3 ">
                                <label for="exampleInputEmail1" class="custom_label" data-translate="translate" data-caption="purpose_title">Цель поездки</label>
                                <select name="purpose" class="form-control " id="purpose" >
                                    <option></option>
                                    <option value="tourism" data-translate="translate" data-caption="purpose_value_1">Туризм, деловые поездки, гостевые поездки</option>
                                    <option value="sport" data-translate="translate" data-caption="purpose_value_2">Спорт, участие в спортивных мероприятиях и тренировках</option>
                                    <!-- <option value="">Работа по найму или контракту за рубежом</option>                                             -->
                                </select>

                            </div>
                            <!--Виды спорта-->
                            <div class="form-group input-group mb-3 sporttype  border border-secondary"  style="display: none">
                                <label for="exampleInputEmail1" class="custom_label" data-translate="translate" data-caption="sport_title">Виды спорта</label>
                                <select name="sport_type" id="sporttype"  class="form-control " >
                                    <option value=""></option>
                                    <option value="winter" data-translate="translate" data-caption="sport_value_1">Зимние виды спорта (кроме горных лыж)</option>
                                    <option value="skies" data-translate="translate" data-caption="sport_value_2">Горнолыжный спорт</option>
                                    <option value="diving" data-translate="translate" data-caption="sport_value_3">Подводное плавание, прыжки в воду</option>
                                    <option value="race" data-translate="translate" data-caption="sport_value_4">Авто(мото)гонки</option>
                                    <option value="bike" data-translate="translate" data-caption="sport_value_5">Велосипед</option>
                                    <option value="mountain" data-translate="translate" data-caption="sport_value_6">Альпинизм, горный туризм, сплав</option>
                                    <option value="game" data-translate="translate" data-caption="sport_value_7">Игровые виды спорта</option>
                                    <option value="athletic" data-translate="translate" data-caption="sport_value_8">Легкая, тяжелая атлетика, гимнастика</option>
                                    <option value="combat" data-translate="translate" data-caption="sport_value_9">Единоборства</option>
                                    <option value="parachute" data-translate="translate" data-caption="sport_value_10">Дельтапланеризм, парапланеризм, парашютный спорт</option>
                                    <option value="horse" data-translate="translate" data-caption="sport_value_11">Конный спорт</option>
                                    <option value="swimming" data-translate="translate" data-caption="sport_value_12">Плавание, парусный спорт </option>
                                    <option value="other" data-translate="translate" data-caption="sport_value_13">Другое</option>
                                </select>
                            </div>
                            <div class="form-group input-group mb-3 sporttype  border border-secondary" style="display: none">
                                <label for="exampleInputEmail1" class="custom_label" data-translate="translate" data-caption="sport_degree_title">Степень занятий</label>
                                <select name="sport_category"  id="category" class="form-control" >
                                    <option value=""></option>
                                    <option value="kid" data-translate="translate" data-caption="sport_degree_value_1">Дети до 16 лет</option>
                                    <option value="professional" data-translate="translate" data-caption="sport_degree_value_2">Профессиональный спорт</option>
                                    <option value="invalid" data-translate="translate" data-caption="sport_degree_value_3">Спортсмены - инвалиды</option>
                                </select>
                            </div>
                            <div class="form-group input-group mb-3   border border-secondary">
                                <label for="exampleInputEmail1" class="custom_label" data-translate="translate" data-caption="name">Имя</label>
                                <input type="text" name="name" value="" class="form-control name" placeholder="Имя"/>
                            </div>
                            <div class="form-group input-group mb-3   border border-secondary">
                                <label for="exampleInputEmail1" class="custom_label" data-translate="translate" data-caption="phone_number">Телефон</label>
                                <input type="text" name="phone" value="" class="form-control phone" placeholder="Телефон"/>
                            </div>
                            <div class="form-group input-group mb-3  border border-secondary">
                                <label for="exampleInputEmail1" class="custom_label">Email</label>
                                <input name="email" type="email"  class="border_color form-control" id="user_email" placeholder="Email">
                            </div>
                            <div class="form-group input-group mb-3   border border-secondary">
                                <label for="exampleInputEmail1" class="custom_label" data-translate="translate" data-caption="resident">Вы резидент?</label>
                                <select name="resident"  id="resident" class="form-control" >
                                    <option value="" data-translate="translate" data-caption="resident_value_0">Выберите</option>
                                    <option value="yes" data-translate="translate" data-caption="resident_value_1">Да</option>
                                    <option value="no" data-translate="translate" data-caption="resident_value_2">Нет</option>
                                </select>
                            </div>

                    </div>
                        <!--Сделать расчет-->
                    <div class="clearfix"></div>
                        <div class="col-md-12">
                            <div data-translate="translate" data-caption="error_message" class="alert alert-warning text-center" id="info_message" role="alert" style="display: none">
                                Заполните пустые поля
                            </div>
                            <div class="clearfix"></div>
                            <button type="submit" value="submit" style="width: 100%" class="btn btn-lg rounded-0 btn-success  btn-default" id="result_button" data-translate="translate" data-caption="calc_button">
                                Рассчитать стоимость
                            </button>

                        </div>
            </form>
                        <!--РЕЗУЛЬТАТ-->
            <div id="result_hide" class="col-md-12 section-padding-80-0" style="display:none ">
                <h4 class="text-center" data-translate="translate" data-caption="total_title">Итоговая стоимость полиса</h4>
                <table class="table table-borderless table-hover"  style="text-align: center">
                    <tbody  class="info">
                    </tbody>
                </table>
                <div class="col-md-12">
                    <div class="total_price_container">
                        <span class="total_price_span text-left" data-translate="translate" data-caption="total_price">Итоговая сумма</span>
                        <span class="total_price_span float-right" id="result" data-currency_usd="" data-currency_eur="" data-total="">4 230 тu</span>
                    </div>
                </div>
                <div class="col-md text-center" style="display:none " id="for_resident_info">
                    <h3>Спасибо что выбрали Центр Визовой Поддержки!</h3>
                    <p>Наши менеджера скоро свяжутся с вами!</p>
                </div>
                <!--Перейти к оплате-->
                <button style="width: 100%" class="btn btn-lg rounded-0 btn-success  btn-default" type="button" id="go_to_pay" data-total_sum="" data-pg_order_id="" data-name="" data-tariff="" data-pg_user_phone="">
                    <span data-translate="translate" data-caption="go_pay_title">Оставить заявку</span>
                </button>
            </div>

            <div class="col-md-12 spin_hide section-padding-80-0" style="display: none">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="row">
                        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <div class="row text-primary">
                        <span data-translate="translate" data-caption="waiting">Идет подсчет данных...</span>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
<?php include 'footer.php';?>