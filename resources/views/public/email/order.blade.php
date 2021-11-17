<h2>Получена заявка с сайта ck-tct.ru:</h2>
@if(isset($name))
    <span>Имя: </span><strong>{{ $name }}</strong><br>
@endif
@if(isset($email))
    <span>Email: </span><strong>{{ $email }}</strong><br>
@endif
@if(isset($phone))
    <span>Телефон: </span><strong>{{ $phone }}</strong><br>
@endif
@if(isset($requisites))
    <span>Реквизиты: </span><strong>{{ $requisites }}</strong><br>
@endif
@if(isset($boiler_type))
    <span>Тип котельной установки: </span><strong>{{ $boiler_type }}</strong><br>
@endif
@if(isset($services_1))
    <span>Состав необходимых работ: </span><strong>{{ $services_1 }}</strong><br>
@endif
@if(isset($services_2))
    <span>Состав необходимых работ: </span><strong>{{ $services_2 }}</strong><br>
@endif
@if(isset($services_3))
    <span>Состав необходимых работ: </span><strong>{{ $services_3 }}</strong><br>
@endif
@if(isset($services_4))
    <span>Состав необходимых работ: </span><strong>{{ $services_4 }}</strong><br>
@endif
@if(isset($services_5))
    <span>Состав необходимых работ: </span><strong>{{ $services_5 }}</strong><br>
@endif
@if(isset($services_6))
    <span>Состав необходимых работ: </span><strong>{{ $services_6 }}</strong><br>
@endif
@if(isset($services_7))
    <span>Состав необходимых работ: </span><strong>{{ $services_7 }}</strong><br>
@endif
@if(isset($services_8))
    <span>Состав необходимых работ: </span><strong>{{ $services_8 }}</strong><br>
@endif
@if(isset($type_heat_supply_system_1) || isset($type_heat_supply_system_2) || isset($type_heat_supply_system_3) || isset($type_heat_supply_system_4))
    @if(isset($type_heat_supply_system_1))
        <span>Тип системы теплоснабжения: </span><strong>{{ $type_heat_supply_system_1 }}</strong><br>
    @endif
    @if(isset($type_heat_supply_system_2))
        <span>Тип системы теплоснабжения: </span><strong>{{ $type_heat_supply_system_2 }}</strong><br>
    @endif
    @if(isset($type_heat_supply_system_3))
        <span>Тип системы теплоснабжения: </span><strong>{{ $type_heat_supply_system_3 }}</strong><br>
    @endif
    @if(isset($type_heat_supply_system_4))
        <span>Тип системы теплоснабжения: </span><strong>{{ $type_heat_supply_system_4 }}</strong><br>
    @endif
@endif
@if(isset($heating_capacity))
    <span>Общая теплопроизводительность, Гкал/час или кВт: </span><strong>{{ $heating_capacity }}</strong><br>
@endif
@if(isset($quality_and_power))
    <span>Количество котлов и единичная мощность котла, Гкал/час или кВт: </span><strong>{{ $quality_and_power }}</strong><br>
@endif
@if(isset($heat_load_distribution_1) || isset($heat_load_distribution_2) || isset($heat_load_distribution_3) || isset($heat_load_distribution_4))
    <strong>Распределение тепловой нагрузки</strong>
    @if(isset($heat_load_distribution_1))
        <span>На ГВС, Гкал/час: </span><strong>{{ $heat_load_distribution_1 }}</strong><br>
    @endif
    @if(isset($heat_load_distribution_2))
        <span>На вентиляцию, Гкал/час: </span><strong>{{ $heat_load_distribution_2 }}</strong><br>
    @endif
    @if(isset($heat_load_distribution_3))
        <span>На вентиляцию, Гкал/час: </span><strong>{{ $heat_load_distribution_3 }}</strong><br>
    @endif
    @if(isset($heat_load_distribution_4))
        <span>Температурный режим системы отопления, С (вход-выход): </span><strong>{{ $heat_load_distribution_4 }}</strong><br>
    @endif
@endif
@if(isset($water_temp))
    <span>Расчетная температура воды на ГВС, С: </span><strong>{{ $water_temp }}</strong><br>
@endif
@if(isset($water_consumption))
    <span>Расход горячей воды на ГВС, м3/час: </span><strong>{{ $water_consumption }}</strong><br>
@endif
@if(isset($water_pressure_1))
    <span>Давление воды в тепловой сети, Мпа: </span><strong>{{ $water_pressure_1 }}</strong><br>
@endif
@if(isset($water_pressure_2))
    <span>Давление воды в водопроводе, Мпа: </span><strong>{{ $water_pressure_2 }}</strong><br>
@endif
@if(isset($suspended_substances) || isset($transparency) || isset($alkalinity) || isset($rigidity) || isset($iron))
    <strong>Химический анализ воды</strong>
    @if(isset($suspended_substances))
        <span>Содержание взвешенных веществ, мг/кг: </span><strong>{{ $suspended_substances }}</strong><br>
    @endif
    @if(isset($transparency))
        <span>Прозрачность по шифту (или кольцу), см: </span><strong>{{ $transparency }}</strong><br>
    @endif
    @if(isset($alkalinity))
        <span>Щелочность, мг/кг: </span><strong>{{ $alkalinity }}</strong><br>
    @endif
    @if(isset($rigidity))
        <span>Общая жесткость, мг-экв/кг: </span><strong>{{ $rigidity }}</strong><br>
    @endif
    @if(isset($iron))
        <span>Содержание железа в пересчете на Fe, мг/кг: </span><strong>{{ $iron }}</strong><br>
    @endif
@endif
@if(isset($main_fuel) || isset($reserve_fuel))
    <strong>Вид топлива</strong>
    @if(isset($main_fuel))
        <span>Основное: </span><strong>{{ $main_fuel }}</strong><br>
    @endif
    @if(isset($reserve_fuel))
        <span>Резервное: </span><strong>{{ $reserve_fuel }}</strong><br>
    @endif
@endif
@if(isset($fuel_mark) || isset($calorific) || isset($size))
    <strong>Характеристика топлива</strong>
    @if(isset($fuel_mark))
        <span>Марка: </span><strong>{{ $fuel_mark }}</strong><br>
    @endif
    @if(isset($calorific))
        <span>Калорийность, ккал/кг: </span><strong>{{ $calorific }}</strong><br>
    @endif
    @if(isset($size))
        <span>Размер кусков, мм: </span><strong>{{ $size }}</strong><br>
    @endif
@endif
@if(isset($modular_blocks_quality))
    <span>Количество модульных блоков, шт: </span><strong>{{ $modular_blocks_quality }}</strong><br>
@endif
@if(isset($chimney))
    <span>Наличие дымовой трубы (размеры), мм: </span><strong>{{ $chimney }}</strong><br>
@endif
@if(isset($boiler_fuel_supply))
    <span>Подача топлива в котел: </span><strong>{{ $boiler_fuel_supply }}</strong><br>
@endif
@if(isset($boiler_room_fuel_supply))
    <span>Подача топлива в модульную котельную: </span><strong>{{ $boiler_room_fuel_supply }}</strong><br>
@endif
@if(isset($boiler_room_removal_ash))
    <span>Удаление золы из котельной: </span><strong>{{ $boiler_room_removal_ash }}</strong><br>
@endif
@if(isset($boiler_room_category))
    <span>Категория котельной (наличие резервного котла): </span><strong>{{ $boiler_room_category }}</strong><br>
@endif
@if(isset($boiler_room_equipment_1) || isset($boiler_room_equipment_2) || isset($boiler_room_equipment))
    <strong>Оборудование котельной</strong><br>
    @if(isset($boiler_room_equipment_1))
        <span>Насосное оборудование: </span><strong>{{ $boiler_room_equipment_1 }}</strong><br>
    @endif
    @if(isset($boiler_room_equipment_2))
        <span>Запорная арматура: </span><strong>{{ $boiler_room_equipment_2 }}</strong><br>
    @endif
    @if(isset($boiler_room_equipment))
        <span>Дополнительно: </span><strong>{{ $boiler_room_equipment }}</strong><br>
    @endif
@endif
@if(isset($limitations))
    <span>Наличие ограничений: </span><strong>{{ $limitations }}</strong><br>
@endif
@if(isset($additional_conditions))
    <span>Дополнительные условия по проектированию: </span><strong>{{ $additional_conditions }}</strong><br>
@endif
@if(isset($delivery_time))
    <span>Требуемый срок поставки: </span><strong>{{ $delivery_time }}</strong><br>
@endif
@if(isset($delivery_address))
    <span>Адрес поставки: </span><strong>{{ $delivery_address }}</strong><br>
@endif
@if(isset($installation_address))
    <span>Адрес монтажа: </span><strong>{{ $installation_address }}</strong><br>
@endif
@if(isset($object_name))
    <span>Наименование отапливаемого объекта: </span><strong>{{ $object_name }}</strong><br>
@endif
@if(isset($diameter))
    <span>Диаметр: </span><strong>{{ $diameter }}</strong><br>
@endif
@if(isset($length))
    <span>Протяженность: </span><strong>{{ $length }}</strong><br>
@endif
@if(isset($temp))
    <span>Температура носителя: </span><strong>{{ $temp }}</strong><br>
@endif
@if(isset($boiler))
    <span>Марка котла: </span><strong>{{ $boiler }}</strong><br>
@endif
@if(isset($fuel))
    <span>Тип топлива: </span><strong>{{ $fuel }}</strong><br>
@endif
@if(isset($power))
    <span>Мощность: </span><strong>{{ $power }}</strong><br>
@endif
@if(isset($object))
    <span>Объект: </span><strong>{{ $object }}</strong><br>
@endif
@if(isset($location))
    <span>Местонахождение: </span><strong>{{ $location }}</strong><br>
@endif
@if(isset($description))
    <span>Описание работ: </span><strong>{{ $description }}</strong><br>
@endif
@if(isset($company_name))
    <span>Название компании: </span><strong>{{ $company_name }}</strong><br>
@endif
@if(isset($post))
    <span>Должность: </span><strong>{{ $post }}</strong><br>
@endif
@if(isset($communication_method))
    <span>Метод связи: </span><strong>{{ $communication_method }}</strong><br>
@endif
@if(isset($comment))
    <span>Текст сообщения: </span><p>{{ $comment }}</p><br>
@endif
