<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MultiStepFormController extends Controller
{

    public function step1send(Request $request)
    {
        $step = $request->session()->get('step');

        if ($step == 1)
        {
            $step++;
        } else {
            $step = 2;
        }
        $need_service = $request->input('need_service');
        session(['need_service' => $need_service, 'step' => $step]);

        return redirect()->route('step2');
    }

    public function step2(Request $request)
    {
        $step = $request->session()->get('step');
        $need_service = $request->session()->get('need_service');

        return view('public.pages.order', ['need_service' => $need_service, 'step' => $step]);
    }

    public function step2service1(Request $request)
    {
        $validated = $request->validate([
            'need_service_2' => 'required'
        ]);

        $step = $request->session()->get('step');

        if ($step == 2)
        {
            $step++;
        } else {
            $step = 3;
        }

        $need_service_2 = $request->input('need_service_2');
        session(['need_service_2' => $need_service_2, 'step' => $step]);

        return redirect()->route('step3');
    }

    public function step2service2(Request $request)
    {
        $rules = [
            'step2name' => 'required|max:30',
            'step2phone' => 'required',
            'step2email' => 'required',
            'step2comment' => 'nullable'
        ];

        $messages = [
            'step2name.required' => 'Поле :attribute обязательно для заполнения.',
            'step2phone.required' => 'Поле :attribute обязательно для заполнения.',
            'step2email.required' => 'Поле :attribute обязательно для заполнения.'
        ];

        $validated = Validator::make($request->all(), $rules, $messages, [
            'step2name' => 'Имя',
            'step2email' => 'Email',
            'step2phone' => 'Телефон',
            'step2comment' => 'Комментарий'
        ])->validateWithBag('orderStep2');

        $name = $request->input('step2name');
        $email = $request->input('step2email');
        $phone = $request->input('step2phone');
        $comment = $request->input('step2comment');
        $admin_email = env('MAIL_ADMIN_EMAIL');

        $data = array('name' => $name, 'email' => $email, 'phone' => $phone, 'comment' => $comment);
        Mail::send('public.email.order', $data, function($message) use ($name, $admin_email) {
            $message->to($admin_email, $name)->subject('Заявка с сайта');
            $message->from(env('MAIL_ADMIN_EMAIL'), 'СК Теплострой');
        });

        $request->session()->flush();

        return redirect()->route('thanks');
    }

    public function step2service3(Request $request)
    {
        $validated = $request->validate([
            'object' => 'nullable',
            'description' => 'nullable'
        ]);

        $step = 4;
        $object      = $request->input('object');
        $description = $request->input('description');

        session([
            'object'      => $object,
            'description' => $description,
            'step'        => $step
        ]);

        return redirect()->route('step4');
    }

    public function step2service4(Request $request)
    {
        $step = 4;
        $requisites      = $request->input('requisites');
        $boiler_type = $request->input('boiler_type');
        $services_1      = $request->input('services_1');
        $services_2 = $request->input('services_2');
        $services_3      = $request->input('services_3');
        $services_4 = $request->input('services_4');
        $services_5      = $request->input('services_5');
        $services_6 = $request->input('services_6');
        $services_7      = $request->input('services_7');
        $services_8 = $request->input('services_8');
        $type_heat_supply_system_1      = $request->input('type_heat_supply_system_1');
        $type_heat_supply_system_2 = $request->input('type_heat_supply_system_2');
        $type_heat_supply_system_3      = $request->input('type_heat_supply_system_3');
        $type_heat_supply_system_4 = $request->input('type_heat_supply_system_4');
        $heating_capacity      = $request->input('heating_capacity');
        $quality_and_power = $request->input('quality_and_power');
        $heat_load_distribution_1      = $request->input('heat_load_distribution_1');
        $heat_load_distribution_2 = $request->input('heat_load_distribution_2');
        $heat_load_distribution_3      = $request->input('heat_load_distribution_3');
        $heat_load_distribution_4 = $request->input('heat_load_distribution_4');
        $water_temp      = $request->input('water_temp');
        $water_consumption = $request->input('water_consumption');
        $water_pressure_1      = $request->input('water_pressure_1');
        $water_pressure_2 = $request->input('water_pressure_2');
        $suspended_substances      = $request->input('suspended_substances');
        $transparency = $request->input('transparency');
        $alkalinity      = $request->input('alkalinity');
        $rigidity = $request->input('rigidity');
        $iron      = $request->input('iron');
        $main_fuel = $request->input('main_fuel');
        $reserve_fuel      = $request->input('reserve_fuel');
        $fuel_mark = $request->input('fuel_mark');
        $calorific      = $request->input('calorific');
        $size = $request->input('size');
        $modular_blocks_quality      = $request->input('modular_blocks_quality');
        $chimney = $request->input('chimney');
        $boiler_fuel_supply      = $request->input('boiler_fuel_supply');
        $boiler_room_fuel_supply = $request->input('boiler_room_fuel_supply');
        $boiler_room_removal_ash      = $request->input('boiler_room_removal_ash');
        $boiler_room_category = $request->input('boiler_room_category');
        $boiler_room_equipment_1 = $request->input('boiler_room_equipment_1');
        $boiler_room_equipment_2      = $request->input('boiler_room_equipment_2');
        $boiler_room_equipment = $request->input('boiler_room_equipment');
        $limitations      = $request->input('limitations');
        $additional_conditions = $request->input('additional_conditions');
        $delivery_time      = $request->input('delivery_time');
        $delivery_address = $request->input('delivery_address');
        $installation_address      = $request->input('installation_address');
        $object_name = $request->input('object_name');

        session([
            'requisites'      => $requisites,
            'boiler_type' => $boiler_type,
            'services_1'        => $services_1,
            'services_2'      => $services_2,
            'services_3' => $services_3,
            'services_4'        => $services_4,
            'services_5'      => $services_5,
            'services_6' => $services_6,
            'services_7'        => $services_7,
            'services_8'      => $services_8,
            'type_heat_supply_system_1' => $type_heat_supply_system_1,
            'type_heat_supply_system_2'        => $type_heat_supply_system_2,
            'type_heat_supply_system_3'      => $type_heat_supply_system_3,
            'type_heat_supply_system_4' => $type_heat_supply_system_4,
            'heating_capacity'        => $heating_capacity,
            'quality_and_power'      => $quality_and_power,
            'heat_load_distribution_1' => $heat_load_distribution_1,
            'heat_load_distribution_2'        => $heat_load_distribution_2,
            'heat_load_distribution_3'      => $heat_load_distribution_3,
            'heat_load_distribution_4' => $heat_load_distribution_4,
            'water_temp'        => $water_temp,
            'water_consumption'      => $water_consumption,
            'water_pressure_1' => $water_pressure_1,
            'water_pressure_2'        => $water_pressure_2,
            'suspended_substances'      => $suspended_substances,
            'transparency' => $transparency,
            'alkalinity'        => $alkalinity,
            'rigidity'      => $rigidity,
            'iron' => $iron,
            'main_fuel'        => $main_fuel,
            'reserve_fuel'      => $reserve_fuel,
            'fuel_mark' => $fuel_mark,
            'calorific'        => $calorific,
            'size'      => $size,
            'modular_blocks_quality' => $modular_blocks_quality,
            'chimney'        => $chimney,
            'boiler_fuel_supply'      => $boiler_fuel_supply,
            'boiler_room_fuel_supply' => $boiler_room_fuel_supply,
            'boiler_room_removal_ash'        => $boiler_room_removal_ash,
            'boiler_room_category'      => $boiler_room_category,
            'boiler_room_equipment_1' => $boiler_room_equipment_1,
            'boiler_room_equipment_2'        => $boiler_room_equipment_2,
            'boiler_room_equipment'      => $boiler_room_equipment,
            'limitations' => $limitations,
            'additional_conditions'        => $additional_conditions,
            'delivery_time' => $delivery_time,
            'delivery_address'        => $delivery_address,
            'installation_address'      => $installation_address,
            'object_name' => $object_name,
            'step' => $step
        ]);

        return redirect()->route('step4');
    }

    public function step3(Request $request)
    {
        $step = $request->session()->get('step');
        $need_service = $request->session()->get('need_service');
        $need_service_2 = $request->session()->get('need_service_2');

        return view('public.pages.order', ['step' => $step, 'need_service' => $need_service, 'need_service_2' => $need_service_2]);
    }

    public function step3service1(Request $request)
    {
        $validated = $request->validate([
            'boiler' => 'nullable',
            'fuel' => 'nullable',
            'power' => 'nullable',
            'description' => 'nullable'
        ]);

        $step = 4;
        $boiler      = $request->input('boiler');
        $fuel        = $request->input('fuel');
        $power       = $request->input('power');
        $description = $request->input('description');

        session([
            'boiler'      => $boiler,
            'fuel'        => $fuel,
            'power'       => $power,
            'description' => $description,
            'step'        => $step
        ]);

        return redirect()->route('step4');
    }

    public function step3service2(Request $request)
    {
        $validated = $request->validate([
            'diameter' => 'nullable',
            'length' => 'nullable',
            'temp' => 'nullable',
            'description' => 'nullable'
        ]);

        $step = 4;
        $diameter    = $request->input('diameter');
        $length      = $request->input('length');
        $temp        = $request->input('temp');
        $description = $request->input('description');

        session([
            'diameter'    => $diameter,
            'length'      => $length,
            'temp'        => $temp,
            'description' => $description,
            'step'        => $step
        ]);

        return redirect()->route('step4');
    }

    public function step3service3(Request $request)
    {
        $validated = $request->validate([
            'object' => 'nullable',
            'location' => 'nullable',
            'description' => 'nullable'
        ]);

        $step = 4;
        $object      = $request->input('object');
        $location    = $request->input('location');
        $description = $request->input('description');

        session([
            'object'      => $object,
            'location'    => $location,
            'description' => $description,
            'step'        => $step
        ]);

        return redirect()->route('step4');
    }

    public function step4(Request $request)
    {
        $step = $request->session()->get('step');

        return view('public.pages.order', ['step' => $step]);
    }

    public function step4send(Request $request)
    {
        $rules = [
            'company_name' => 'nullable',
            'name' => 'required',
            'post' => 'nullable',
            'phone' => 'required',
            'email' => 'required',
            'communication_method' => 'nullable'
        ];

        $messages = [
            'name.required' => 'Поле :attribute обязательно для заполнения.',
            'phone.required' => 'Поле :attribute обязательно для заполнения.',
            'email.required' => 'Поле :attribute обязательно для заполнения.'
        ];

        $validated = Validator::make($request->all(), $rules, $messages, [
            'name' => 'Имя',
            'email' => 'Email',
            'phone' => 'Телефон'
        ])->validateWithBag('orderStep4');

        $requisites      = $request->session()->get('requisites');
        $boiler_type = $request->session()->get('boiler_type');
        $services_1      = $request->session()->get('services_1');
        $services_2 = $request->session()->get('services_2');
        $services_3      = $request->session()->get('services_3');
        $services_4 = $request->session()->get('services_4');
        $services_5      = $request->session()->get('services_5');
        $services_6 = $request->session()->get('services_6');
        $services_7      = $request->session()->get('services_7');
        $services_8 = $request->session()->get('services_8');
        $type_heat_supply_system_1      = $request->session()->get('type_heat_supply_system_1');
        $type_heat_supply_system_2 = $request->session()->get('type_heat_supply_system_2');
        $type_heat_supply_system_3      = $request->session()->get('type_heat_supply_system_3');
        $type_heat_supply_system_4 = $request->session()->get('type_heat_supply_system_4');
        $heating_capacity      = $request->session()->get('heating_capacity');
        $quality_and_power = $request->session()->get('quality_and_power');
        $heat_load_distribution_1      = $request->session()->get('heat_load_distribution_1');
        $heat_load_distribution_2 = $request->session()->get('heat_load_distribution_2');
        $heat_load_distribution_3      = $request->session()->get('heat_load_distribution_3');
        $heat_load_distribution_4 = $request->session()->get('heat_load_distribution_4');
        $water_temp      = $request->session()->get('water_temp');
        $water_consumption = $request->session()->get('water_consumption');
        $water_pressure_1      = $request->session()->get('water_pressure_1');
        $water_pressure_2 = $request->session()->get('water_pressure_2');
        $suspended_substances      = $request->session()->get('suspended_substances');
        $transparency = $request->session()->get('transparency');
        $alkalinity      = $request->session()->get('alkalinity');
        $rigidity = $request->session()->get('rigidity');
        $iron      = $request->session()->get('iron');
        $main_fuel = $request->session()->get('main_fuel');
        $reserve_fuel      = $request->session()->get('reserve_fuel');
        $fuel_mark = $request->session()->get('fuel_mark');
        $calorific      = $request->session()->get('calorific');
        $size = $request->session()->get('size');
        $modular_blocks_quality      = $request->session()->get('modular_blocks_quality');
        $chimney = $request->session()->get('chimney');
        $boiler_fuel_supply      = $request->session()->get('boiler_fuel_supply');
        $boiler_room_fuel_supply = $request->session()->get('boiler_room_fuel_supply');
        $boiler_room_removal_ash      = $request->session()->get('boiler_room_removal_ash');
        $boiler_room_category = $request->session()->get('boiler_room_category');
        $boiler_room_equipment_1 = $request->session()->get('boiler_room_equipment_1');
        $boiler_room_equipment_2      = $request->session()->get('boiler_room_equipment_2');
        $boiler_room_equipment = $request->session()->get('boiler_room_equipment');
        $limitations      = $request->session()->get('limitations');
        $additional_conditions = $request->session()->get('additional_conditions');
        $delivery_time      = $request->session()->get('delivery_time');
        $delivery_address = $request->session()->get('delivery_address');
        $installation_address      = $request->session()->get('installation_address');
        $object_name = $request->session()->get('object_name');
        $location             = $request->session()->get('location');
        $diameter             = $request->session()->get('diameter');
        $length               = $request->session()->get('length');
        $temp                 = $request->session()->get('temp');
        $object               = $request->session()->get('object');
        $boiler               = $request->session()->get('boiler');
        $fuel                 = $request->session()->get('fuel');
        $power                = $request->session()->get('power');
        $description          = $request->session()->get('description');
        $company_name         = $request->input('company_name');
        $name                 = $request->input('name');
        $post                 = $request->input('post');
        $phone                = $request->input('phone');
        $email                = $request->input('email');
        $communication_method = $request->input('communication_method');
        $admin_email          = env('MAIL_ADMIN_EMAIL');

        $data = array(
            'requisites'      => $requisites,
            'boiler_type' => $boiler_type,
            'services_1'        => $services_1,
            'services_2'      => $services_2,
            'services_3' => $services_3,
            'services_4'        => $services_4,
            'services_5'      => $services_5,
            'services_6' => $services_6,
            'services_7'        => $services_7,
            'services_8'      => $services_8,
            'type_heat_supply_system_1' => $type_heat_supply_system_1,
            'type_heat_supply_system_2'        => $type_heat_supply_system_2,
            'type_heat_supply_system_3'      => $type_heat_supply_system_3,
            'type_heat_supply_system_4' => $type_heat_supply_system_4,
            'heating_capacity'        => $heating_capacity,
            'quality_and_power'      => $quality_and_power,
            'heat_load_distribution_1' => $heat_load_distribution_1,
            'heat_load_distribution_2'        => $heat_load_distribution_2,
            'heat_load_distribution_3'      => $heat_load_distribution_3,
            'heat_load_distribution_4' => $heat_load_distribution_4,
            'water_temp'        => $water_temp,
            'water_consumption'      => $water_consumption,
            'water_pressure_1' => $water_pressure_1,
            'water_pressure_2'        => $water_pressure_2,
            'suspended_substances'      => $suspended_substances,
            'transparency' => $transparency,
            'alkalinity'        => $alkalinity,
            'rigidity'      => $rigidity,
            'iron' => $iron,
            'main_fuel'        => $main_fuel,
            'reserve_fuel'      => $reserve_fuel,
            'fuel_mark' => $fuel_mark,
            'calorific'        => $calorific,
            'size'      => $size,
            'modular_blocks_quality' => $modular_blocks_quality,
            'chimney'        => $chimney,
            'boiler_fuel_supply'      => $boiler_fuel_supply,
            'boiler_room_fuel_supply' => $boiler_room_fuel_supply,
            'boiler_room_removal_ash'        => $boiler_room_removal_ash,
            'boiler_room_category'      => $boiler_room_category,
            'boiler_room_equipment_1' => $boiler_room_equipment_1,
            'boiler_room_equipment_2'        => $boiler_room_equipment_2,
            'boiler_room_equipment'      => $boiler_room_equipment,
            'limitations' => $limitations,
            'additional_conditions'        => $additional_conditions,
            'delivery_time' => $delivery_time,
            'delivery_address'        => $delivery_address,
            'installation_address'      => $installation_address,
            'object_name' => $object_name,
            'location'             => $location,
            'diameter'             => $diameter,
            'length'               => $length,
            'temp'                 => $temp,
            'object'               => $object,
            'boiler'               => $boiler,
            'fuel'                 => $fuel,
            'power'                => $power,
            'description'          => $description,
            'company_name'         => $company_name,
            'name'                 => $name,
            'post'                 => $post,
            'email'                => $email,
            'phone'                => $phone,
            'communication_method' => $communication_method
        );

        Mail::send('public.email.order', $data, function($message) use ($name, $admin_email) {
            $message->to($admin_email, $name)->subject('Заявка с сайта');
            $message->from(env('MAIL_ADMIN_EMAIL'), 'СК Теплострой');
        });

        $request->session()->flush();

        return redirect()->route('thanks');
    }

    public function thanks()
    {
        return view('public.pages.thanks');
    }
}
