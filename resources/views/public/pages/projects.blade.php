@extends('public.layout.home')

@section('title', 'Реализованные проекты')
@section('description', 'Строительство и  монтаж котельного оборудования, а так же инженерных сетей.')
@section('keywords', 'котельные, инженерные сети, внутренние инженерные сети, водоснабжение, модульные котельные')

@section('left_sidebar')
    <div class='col-sm-2'>
        <ul class='nav nav-pills nav-stacked'>
            <li>
                <p class='text-center' style='background-color:#ef8c10; color:white;'>ТОВАРЫ И УСЛУГИ</p>
            </li>
            <li>
            @foreach($categories as $category)
                <li style='border-top:1px solid #ddd;'>
                    <a class='left-menu' style='text-decoration: none;' href="tovary-i-uslugi/{{ $category->category_url }}">{{ $category->category_name }}</a>
                </li>
            @endforeach
            <li style="border-top:1px solid #ddd;">
                <a class='left-menu' style="text-decoration: none;" href="{{ route('projects') }}">Реализованные проекты</a>
            </li>
            <li style="border-top:1px solid #ddd;">
                <a class='left-menu' style="text-decoration: none;" href="{{ route('vacancy') }}">Вакансии компании</a>
            </li>
            <li>
                <p style='background-image:url(images/elem_hor_shad_191x32.png);'>&nbsp;</p>
            </li>
            <li>
                <a href="{{ route('order') }}" class='btn btn-danger'>Оформить заказ</a>
            </li>
            <li>
                <h6 style='margin-top:25px; color:orange;'>Примите участие в опросе!<br/></h6>
            </li>
            <li>
                <h6>Вы относитесь к:</h6>
            </li>
            <li>
                @include('public.inc.poll')
            </li>
        </ul>
    </div>
@endsection

@section('content')
<p><u><span style="font-size:22px;">Наши реализованные проекты.&nbsp;</span></u></p>

<p><u><span style="font-size:18px;">Вам требуется ответственный генеральный подрядчик? Звоните 8 800 250 04 20</span></u></p>

<p><span style="font-size:18px;"><strong>Выполнение</strong> работ по капитальному ремонту участка теплосети от котельной №3 по ул. 40 лет Победы, 15 до ТК 146 в гп. Северо-Енисейский (Протяженность ремонтного участка 853 м)</span></p>

<p><span style="font-size:18px;">Заказчик: Муниципальное&nbsp;казенное учреждение &laquo;Служба заказчика-застройщика Северо-Енисейского района&raquo;</span></p>

<p><span style="font-size:18px;">Работы выполнялись в течении 12 дней и были сданы в срок.</span></p>

<p><span style="font-size:18px;"><img alt="" src="" style="width: 800px; height: 800px;" /></span></p>

<p>&nbsp;</p>

<p><span style="font-size: 18px; text-align: center;"><strong>Теплоизоляция</strong> трубопроводов на объекте ПАО Морской порт г. Владивосток</span></p>

<p>&nbsp;</p>

<table style="width:500px;">
    <tbody>
    <tr>
        <th scope="row" style="text-align: center;"><img alt="" src="" style="opacity: 0.9; width: 400px; height: 300px;" /></th>
        <td style="text-align: center;"><img alt="" src="" style="opacity: 0.9; width: 400px; height: 300px;" /></td>
    </tr>
    <tr>
        <th scope="row" style="text-align: center;"><img alt="" src="" style="opacity: 0.9; width: 400px; height: 300px;" /></th>
        <td style="text-align: center;"><img alt="" src="" style="opacity: 0.9; width: 400px; height: 300px;" /></td>
    </tr>
    </tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size: 18px;">В результате работы по монтажу были выполнены в срок, заказчик остался доволен качеством поставленной теплоизоляции и &nbsp;компетентным персоналом.&nbsp;</span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:18px;"><img alt="" src="" style="width: 800px; height: 500px; float: left;" /></span></p>

<p>&nbsp;</p>
@endsection
