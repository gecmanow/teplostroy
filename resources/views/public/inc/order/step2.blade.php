@if($need_service == 1) <!--СТРОИТЕЛЬНО-РЕМОНТНЫЕ РАБОТЫ-->
<p><b>СТРОИТЕЛЬНО-РЕМОНТНЫЕ РАБОТЫ</b></p>
<p>Выберите вид работ:</p>
<form method='post' action="{{ route('step2service1') }}" name='fmZakaz'>
    {{ csrf_field() }}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <input type='radio' name='need_service_2' value=1 checked> Ремонтные работы по котлам и котельному оборудованию<Br>
    <input type='radio' name='need_service_2' value=2> Ремонтные работы по тепловым сетям<Br>
    <input type='radio' name='need_service_2' value=3> Строительство<Br>
    <p></p>
    <input type='submit' class='btn btn-primary' value='&nbsp; Далее... &nbsp;&nbsp;'>
</form>
@endif

@if ($need_service == 2) <!--ТЕПЛОИЗЛЯЦИЯ ППУ (СКОРЛУПА)-->
<p><b>ТЕПЛОИЗЛЯЦИЯ ППУ</b><br></p>
<p>Укажите необходимую информацию, и наш менеджер свяжется с Вами в ближайшее время!</p>
<form name='form' id='form' class='form' action="{{ route('step2service2') }}" method='post'>
    {{ csrf_field() }}
    @if ($errors->orderStep2->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->orderStep2->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <label for='prod_param_1'>Ваше имя: </label><br>
    <input class='input-xlarge' type='text' name='step2name' id='step2name' value="{{ old('step2name') }}"><br>
    <label for='prod_param_2'>Контактный телефон с кодом города: </label><br>
    <input class='input-xlarge' type='text' name='step2phone' id='step2phone' value="{{ old('step2phone') }}"><br>
    <label for='prod_param_3'>E-mail: </label><br>
    <input class='input-xlarge' type='text' name='step2email' id='step2email' value="{{ old('step2email') }}"><br>
    <label for='prod_param_4'>Информация по заказу: </label><br>
    <textarea class='input-xxlarge' name='step2comment' rows='5' id='step2comment'></textarea><br>
    <p>При заказе скорлупы ППУ не забудьте указывать толщину изоляции и потребность в крепежных материалах, клее.</p>
    <p></p>
    <input type='submit' class='btn btn-primary' onclick="reachGoal('online_zayavka');return true;" value='&nbsp; Отправить &nbsp;&nbsp;'>
</form>
@endif

@if($need_service == 3)
    <p><b>ПРОЕКТИРОВАНИЕ</b><br></p>
    <p>Опишите требуемый проект:</p>
    <form method='post' action="{{ route('step2service3') }}" name='fmZakaz'>
        {{ csrf_field() }}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table>
            <tr>
                <td>Объект &nbsp;</td>
                <td><textarea type='text' name='object' rows=5 cols=70></textarea></td>
            </tr>
            <tr>
                <td>Описание работ &nbsp;</td>
                <td><textarea type='text' name='description' rows=15 cols=70></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <p></p>
                    <input type='submit' class='btn btn-primary' value='&nbsp; Далее... &nbsp;&nbsp;'>
                </td>
            </tr>
        </table>
    </form>
@endif

@if($need_service == 4) <!--КОТЕЛЬНЫЕ И КОТЕЛЬНОЕ ОБОРУДОВАНИЕ-->
<form method='post' action="{{ route('step2service4') }}" name='fmZakaz'>
    {{ csrf_field() }}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class='row'>
        <div class='col-sm-3'> Реквизиты </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='requisites'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'>Тип котельной установки</div>
        <div class='col-sm-7'>
            <input type='radio' name='boiler_type' value='блочно-модульная контейнерного исполнения'>блочно-модульная контейнерного исполнения<br>
            <input type='radio' name='boiler_type' value='блочно-модульная на раме без ограждающих конструкций'>блочно-модульная на раме без ограждающих конструкций<br>
            <input type='radio' name='boiler_type' value='стационарная с поставкой россыпью и монтажом на месте'>стационарная с поставкой россыпью и монтажом на месте<br>
            <input type='radio' name='boiler_type' value='крышная'>крышная<br>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'>Состав необходимых работ</div>
        <div class='col-sm-7'>
            <input type='checkbox' name='services_1' value='«под ключ» с комплексом работ на месте монтажа'>«под ключ» с комплексом работ на месте монтажа<br>
            <input type='checkbox' name='services_2' value='обследование объекта'>обследование объекта<br>
            <input type='checkbox' name='services_3' value='проектные работы'>проектные работы<br>
            <input type='checkbox' name='services_4' value='комплектация оборудованием'>комплектация оборудованием<br>
            <input type='checkbox' name='services_5' value='изготовление и поставка комплекта котельной'>изготовление и поставка комплекта котельной<br>
            <input type='checkbox' name='services_6' value='транспортировка котельной на объект'>транспортировка котельной на объект<br>
            <input type='checkbox' name='services_7' value='пуско-наладочные работы'>пуско-наладочные работы<br>
            <input type='checkbox' name='services_8' value='послегарантийное обслуживание'>послегарантийное обслуживание<br>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'>Тип системы теплоснабжения</div>
        <div class='col-sm-7'>
            <input type='checkbox' name='type_heat_supply_system_1' value='открытая'>открытая<br>
            <input type='checkbox' name='type_heat_supply_system_2' value='закрытая'>закрытая<br>
            <input type='checkbox' name='type_heat_supply_system_3' value='зависимая'>зависимая<br>
            <input type='checkbox' name='type_heat_supply_system_4' value='независимая'>независимая<br>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'><b>Технические данные:</b></div>
    </div>
    <div class='row'>
        <div class='col-sm-3'>Общая теплопроизводительность, Гкал/час или кВт</div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='heating_capacity'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'>Количество котлов и единичная мощность котла, Гкал/час или кВт</div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='quality_and_power'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'>Распределение тепловой нагрузки:</div>
    </div>
    <div class='row'>
        <div class='col-sm-3 col-sm-offset-1'> на отопление, Гкал/час: </div>
        <div class='col-sm-6'>
            <input type='text' size=70 name='heat_load_distribution_1'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3 col-sm-offset-1'> на ГВС, Гкал/час: </div>
        <div class='col-sm-6'>
            <input type='text' size=70 name='heat_load_distribution_2'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3 col-sm-offset-1'> на вентиляцию, Гкал/час: </div>
        <div class='col-sm-6'>
            <input type='text' size=70 name='heat_load_distribution_3'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3 col-sm-offset-1'> температурный режим системы отопления, С (вход-выход): </div>
        <div class='col-sm-6'>
            <input type='text' size=70 name='heat_load_distribution_4'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Расчетная температура воды на ГВС, С </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='water_temp'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Расход горячей воды на ГВС, м3/час </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='water_consumption'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Давление воды в тепловой сети, Мпа </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='water_pressure_1'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Давление воды в водопроводе, Мпа </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='water_pressure_2'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> <b>Химический анализ воды:</b></div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Содержание взвешенных веществ, мг/кг </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='suspended_substances'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Прозрачность по шифту (или кольцу), см </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='transparency'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Щелочность, мг/кг </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='alkalinity'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Общая жесткость, мг-экв/кг </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='rigidity'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Содержание железа в пересчете на Fe, мг/кг </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='iron'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> <b>Вид топлива:</b> </div>
    </div>
    <div class='row'>
        <div class='col-sm-3 col-sm-offset-1'> Основное </div>
        <div class='col-sm-6'>
            <input type='text' size=70 name='main_fuel'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3 col-sm-offset-1'> Резервное </div>
        <div class='col-sm-6'>
            <input type='text' size=70 name='reserve_fuel'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'><b>Характеристика топлива:</b></div>
    </div>
    <div class='row'>
        <div class='col-sm-3 col-sm-offset-1'> Марка </div>
        <div class='col-sm-6'>
            <input type='text' size=70 name='fuel_mark'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3 col-sm-offset-1'> Калорийность, ккал/кг </div>
        <div class='col-sm-6'>
            <input type='text' size=70 name='calorific'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3 col-sm-offset-1'> Размер кусков, мм </div>
        <div class='col-sm-6'>
            <input type='text' size=70 name='size'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Количество модульных блоков, шт </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='modular_blocks_quality'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Наличие дымовой трубы (размеры), мм </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='chimney'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Подача топлива в котел </div>
        <div class='col-sm-7'>
            <input type='radio' name='boiler_fuel_supply' value='ручная подача'>ручная подача<br>
            <input type='radio' name='boiler_fuel_supply' value='механическая топка ШП (шурующая планка)'>механическая топка ШП (шурующая планка)<br>
            <input type='radio' name='boiler_fuel_supply' value='угольный питатель ПТЛ'>угольный питатель ПТЛ<br>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Подача топлива в модульную котельную </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='boiler_room_fuel_supply'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Удаление золы из котельной </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='boiler_room_removal_ash'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Категория котельной (наличие резервного котла) </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='boiler_room_category'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Оборудование котельной </div>
        <div class='col-sm-7'>
            <input type='checkbox' name='boiler_room_equipment_1' value='насосное оборудование'>насосное оборудование<br>
            <input type='checkbox' name='boiler_room_equipment_2' value='запорная арматура'>запорная арматура<br>
            <input type='text' size=70 name='boiler_room_equipment'><br>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Наличие ограничений (масса, габариты, энергопотребление и т.д.) </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='limitations'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Дополнительные условия по проектированию </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='additional_conditions'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Требуемый срок поставки </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='delivery_time'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Адрес поставки </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='delivery_address'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Адрес монтажа </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='installation_address'>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-3'> Наименование отапливаемого объекта </div>
        <div class='col-sm-7'>
            <input type='text' size=70 name='object_name'>
        </div>
    </div>
    <input type='submit' class='btn btn-primary' value='&nbsp; Далее... &nbsp;&nbsp;'>
</form>
@endif
