<?php

/* @var $this yii\web\View */

$this->title = 'TimeCards';
?>


<div id="download" data-check='<?php  echo empty($save)? false : true;?>' style="display: none"><?= $save ?></div>
    <div class="row ">
        <div class="col-md-4">
            <div class="row">
                <div class="myWidth2"></div>
                <div class="row" id="addNewButton">
                    <button type="button" id="button_add_event" class="btn btn-primary m-2" data-toggle="modal" data-target="#addNewEventModal">
                        Добавить событие
                    </button>
                </div>
            </div>
        </div>


        <div class="col-md-7">

            <div class="myWrap">
                <div class="card box" id="0" data-text=""></div>
                <div class="card box" id="1" data-text=""></div>
                <div class="card box" id="2" data-text=""></div>
                <div class="card box" id="3" data-text=""></div>
                <div class="card box" id="4" data-text=""></div>
                <div class="card box" id="5" data-text=""></div>
                <div class="card box" id="6" data-text=""></div>
                <div class="card box" id="7" data-text=""></div>
                <div class="card box" id="8" data-text=""></div>
                <div class="card box" id="9" data-text=""></div>
                <div class="w-100"></div>
                <div class="card box" id="10" data-text=""></div>
                <div class="card box" id="11" data-text=""></div>
                <div class="card box" id="12" data-text=""></div>
                <div class="card box" id="13" data-text=""></div>
                <div class="card box" id="14" data-text=""></div>
                <div class="card box" id="15" data-text=""></div>
                <div class="card box" id="16" data-text=""></div>
                <div class="card box" id="17" data-text=""></div>
                <div class="card box" id="18" data-text=""></div>
                <div class="card box" id="19" data-text=""></div>
                <div class="w-100"></div>
                <div class="card box" id="20" data-text=""></div>
                <div class="card box" id="21" data-text=""></div>
                <div class="card box" id="22" data-text=""></div>
                <div class="card box" id="23" data-text=""></div>
                <div class="card box" id="24" data-text=""></div>
                <div class="card box" id="25" data-text=""></div>
                <div class="card box" id="26" data-text=""></div>
                <div class="card box" id="27" data-text=""></div>
                <div class="card box" id="28" data-text=""></div>
                <div class="card box" id="29" data-text=""></div>
                <div class="w-100"></div>
                <div class="card box" id="30" data-text=""></div>
                <div class="card box" id="31" data-text=""></div>
                <div class="card box" id="32" data-text=""></div>
                <div class="card box" id="33" data-text=""></div>
                <div class="card box" id="34" data-text=""></div>
                <div class="card box" id="35" data-text=""></div>
                <div class="card box" id="36" data-text=""></div>
                <div class="card box" id="37" data-text=""></div>
                <div class="card box" id="38" data-text=""></div>
                <div class="card box" id="39" data-text=""></div>
                <div class="w-100"></div>
                <div class="card box" id="40" data-text=""></div>
                <div class="card box" id="41" data-text=""></div>
                <div class="card box" id="42" data-text=""></div>
                <div class="card box" id="43" data-text=""></div>
                <div class="card box" id="44" data-text=""></div>
                <div class="card box" id="45" data-text=""></div>
                <div class="card box" id="46" data-text=""></div>
                <div class="card box" id="47" data-text=""></div>
                <div class="card box" id="48" data-text=""></div>
                <div class="card box" id="49" data-text=""></div>
                <div class="w-100"></div>
                <div class="card box" id="50" data-text=""></div>
                <div class="card box" id="51" data-text=""></div>
                <div class="card box" id="52" data-text=""></div>
                <div class="card box" id="53" data-text=""></div>
                <div class="card box" id="54" data-text=""></div>
                <div class="card box" id="55" data-text=""></div>
                <div class="card box" id="56" data-text=""></div>
                <div class="card box" id="57" data-text=""></div>
                <div class="card box" id="58" data-text=""></div>
                <div class="card box" id="59" data-text=""></div>
                <div class="w-100"></div>
                <div class="card box" id="60"></div>
                <div class="card box" id="61" data-text=""></div>
                <div class="card box" id="62" data-text=""></div>
                <div class="card box" id="63" data-text=""></div>
                <div class="card box" id="64" data-text=""></div>
                <div class="card box" id="65" data-text=""></div>
                <div class="card box" id="66" data-text=""></div>
                <div class="card box" id="67" data-text=""></div>
                <div class="card box" id="68" data-text=""></div>
                <div class="card box" id="69" data-text=""></div>
                <div class="w-100"></div>
                <div class="card box" id="70" data-text=""></div>
                <div class="card box" id="71" data-text=""></div>
                <div class="card box" id="72" data-text=""></div>
                <div class="card box" id="73" data-text=""></div>
                <div class="card box" id="74" data-text=""></div>
                <div class="card box" id="75" data-text=""></div>
                <div class="card box" id="76" data-text=""></div>
                <div class="card box" id="77" data-text=""></div>
                <div class="card box" id="78" data-text=""></div>
                <div class="card box" id="79" data-text=""></div>
                <div class="w-100"></div>
                <div class="card box" id="80" data-text=""></div>
                <div class="card box" id="81" data-text=""></div>
                <div class="card box" id="82" data-text=""></div>
                <div class="card box" id="83" data-text=""></div>
                <div class="card box" id="84" data-text=""></div>
                <div class="card box" id="85" data-text=""></div>
                <div class="card box" id="86" data-text=""></div>
                <div class="card box" id="87" data-text=""></div>
                <div class="card box" id="88" data-text=""></div>
                <div class="card box" id="89" data-text=""></div>
                <div class="w-100"></div>
                <div class="card box" id="90" data-text=""></div>
                <div class="card box" id="91" data-text=""></div>
                <div class="card box" id="92" data-text=""></div>
                <div class="card box" id="93" data-text=""></div>
                <div class="card box" id="94" data-text=""></div>
                <div class="card box" id="95" data-text=""></div>
                <div class="card box" id="96" data-text=""></div>
                <div class="card box" id="97" data-text=""></div>
                <div class="card box" id="98" data-text=""></div>
                <div class="card box" id="99" data-text=""></div>
            </div>
        </div>
    </div>


<!--Modal-->
<!--Modal new event-->
<div class="modal fade" id="addNewEventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLabel">Новое событие</h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Название:</label>
                        <input type="text" class="form-control" id="recipient-name" value="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Время:</label>
                        <input type="time" class="form-control" id="recipient-name" value="">
                    </div>
                    <div class="form-group">
                        <div><label for="color1">Укажите цвет фона:</label>
                            <input id="color1" name="color1" type="text" value="#333399" /></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button type="button" id="addEvent" class="btn btn-primary" data-dismiss="modal">Добавить</button>
            </div>
        </div>
    </div>
</div>
<!--Modal save timeCards-->
<div class="modal fade" id="ModalSave" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLabel">Сохранение:</h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="save-name" class="col-form-label">Имя:</label>
                        <input type="text" class="form-control" id="save-name" value="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button type="button" id="saveCards" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</div>
