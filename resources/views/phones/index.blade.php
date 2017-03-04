@extends('layouts.app')
@section('content')
<div class="container">

    <h1>Телефонный справочник</h1>
    <div class="form-group">
    <form class="ng-pristine ng-valid" role="search">
        <div class="form-group" style="display:inline;">
            <div class="input-group" style="display:table;">
                <span class="input-group-addon" style="width:1%;">
                    <i class="fa fa-search"></i>
                </span>
                <input class="form-control ng-pristine ng-valid ng-empty ng-touched" id="search" role="search" name="search" placeholder="Поиск телефона" autocomplete="off" autofocus="autofocus" type="text" ng-model="query">
            </div>
        </div>
    </form>
    </div>
    
    <div class="form-group">
    <table width="100%" class="table table-hover table-condensed table-bordered">
        <thead>
            <tr>
                <th width="50px" style="text-align:center;"></th>
                <th width="40%" nowrap="" style="text-align:center">ФИО</th>
                <th width="27%" style="text-align:center">Должность</th>
                <th width="10%" style="text-align:center">Внутренний телефон</th>
                <th width="10%" style="text-align:center">Городской телефон</th>
                <th width="10%" style="text-align:center">Быстрый набор</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <th colspan="6" bgcolor="#E6E6E6" align="left" class="bg-primary"><i class="fa fa-home"></i> <strong>ЦРПБ ПАО "ВОЭ"</strong> <span class="pull-right"><small class="">Код: (8442); 400075, г. Волгоград, ул. Шопена, 13</small></span></th>
            </tr>

            <tr>
                <th colspan="6" bgcolor="#EEEEEE" style="text-align:center" class="">Отдел информационных технологий</th>
            </tr>	
            <tr onmouseover="showDel(10);" onmouseout="hideDel(10);">
                <td valign="top" height="35px" ;="" style="text-align:center; "><a href="#" onclick="delClik(10);" id="delPeople10" class="delPeople btn btn-danger btn-xs" style="display: none;"><i class="glyphicon glyphicon-trash"></i></a></td>
                <td class="editable" nowrap="" id="fio:10" title="Двойной клик для редактирования">Светашов Павел Владимирович</td>
                <td class="editable" id="job_title:10" title="Двойной клик для редактирования">Ведущий инженер-программист</td>
                <td class="editable" id="internal_phone:10" style="text-align:center" title="Двойной клик для редактирования">1081</td>
                <td class="editable" id="external_phone:10" style="text-align:center" title="Двойной клик для редактирования">-/-</td>
                <td class="editable" id="speed_dial:10" style="text-align:center" title="Двойной клик для редактирования">-</td>
            </tr>

            <tr onmouseover="showDel(12);" onmouseout="hideDel(12);">
                <td valign="top" height="35px" ;="" style="text-align:center; "><a href="#" onclick="delClik(12);" id="delPeople12" class="delPeople btn btn-danger btn-xs" style="display: none;"><i class="glyphicon glyphicon-trash"></i></a></td>
                <td class="editable" nowrap="" id="fio:12" title="Двойной клик для редактирования">Филатов Сергей Васильевич</td>
                <td class="editable" id="job_title:12" title="Двойной клик для редактирования">Ведущий инженер-программист</td>
                <td class="editable" id="internal_phone:12" style="text-align:center" title="Двойной клик для редактирования">1082</td>
                <td class="editable" id="external_phone:12" style="text-align:center" title="Двойной клик для редактирования">56-20-77</td>
                <td class="editable" id="speed_dial:12" style="text-align:center" title="Двойной клик для редактирования">-</td>
            </tr>

            <tr onmouseover="showDel(2);" onmouseout="hideDel(2);">
                <td valign="top" height="35px" ;="" style="text-align:center; "><a href="#" onclick="delClik(2);" id="delPeople2" class="delPeople btn btn-danger btn-xs" style="display: none;"><i class="glyphicon glyphicon-trash"></i></a></td>
                <td class="editable" nowrap="" id="fio:2" title="Двойной клик для редактирования">-</td>
                <td class="editable" id="job_title:2" title="Двойной клик для редактирования">Ведущий инженер-программист</td>
                <td class="editable" id="internal_phone:2" style="text-align:center" title="Двойной клик для редактирования">1084</td>
                <td class="editable" id="external_phone:2" style="text-align:center" title="Двойной клик для редактирования">-/-</td>
                <td class="editable" id="speed_dial:2" style="text-align:center" title="Двойной клик для редактирования">-</td>
            </tr>

            <tr onmouseover="showDel(13);" onmouseout="hideDel(13);">
                <td valign="top" height="35px" ;="" style="text-align:center; "><a href="#" onclick="delClik(13);" id="delPeople13" class="delPeople btn btn-danger btn-xs" style="display: none;"><i class="glyphicon glyphicon-trash"></i></a></td>
                <td class="editable" nowrap="" id="fio:13" title="Двойной клик для редактирования">Тимофеева Татьяна Викторовна</td>
                <td class="editable" id="job_title:13" title="Двойной клик для редактирования">Инженер-программист</td>
                <td class="editable" id="internal_phone:13" style="text-align:center" title="Двойной клик для редактирования">1087</td>
                <td class="editable" id="external_phone:13" style="text-align:center" title="Двойной клик для редактирования">-/-</td>
                <td class="editable" id="speed_dial:13" style="text-align:center" title="Двойной клик для редактирования">-</td>
            </tr>

            <tr>
                <th colspan="6" bgcolor="#E6E6E6" align="left" class="bg-primary"><i class="fa fa-home"></i> <strong>Пригородные МЭС ПАО "ВОЭ"</strong> <span class="pull-right"><small class="">Код: (84468); 403001, р.п.  Городище, ул. 8-го Гвардейского Танкового корпуса, 22 Б</small></span></th>
            </tr>

            <tr>
                <th colspan="6" bgcolor="#EEEEEE" style="text-align:center" class="">г. Котельниково, 404353, ул. Орлова, 52  код: 84476  факс: 3-39-27</th>
            </tr>	
            <tr onmouseover="showDel(169);" onmouseout="hideDel(169);">
                <td valign="top" height="35px" ;="" style="text-align:center; "><a href="#" onclick="delClik(169);" id="delPeople169" class="delPeople btn btn-danger btn-xs" style="display: none;"><i class="glyphicon glyphicon-trash"></i></a></td>
                <td class="editable" nowrap="" id="fio:169" title="Двойной клик для редактирования">Абросимова Екатерина Олеговна</td>
                <td class="editable" id="job_title:169" title="Двойной клик для редактирования">Инженер-программист</td>
                <td class="editable" id="internal_phone:169" style="text-align:center" title="Двойной клик для редактирования">-</td>
                <td class="editable" id="external_phone:169" style="text-align:center" title="Двойной клик для редактирования">3-39-27</td>
                <td class="editable" id="speed_dial:169" style="text-align:center" title="Двойной клик для редактирования">*628
                </td>
            </tr>

            <tr>
                <th colspan="6" bgcolor="#EEEEEE" style="text-align:center" class="">р.п. Городище,403001, ул. 8-го Гвардейского Танкового корпуса, 22Б код:84468 факс:3-15-26</th>
            </tr>	
            <tr onmouseover="showDel(144);" onmouseout="hideDel(144);">
                <td valign="top" height="35px" ;="" style="text-align:center; "><a href="#" onclick="delClik(144);" id="delPeople144" class="delPeople btn btn-danger btn-xs" style="display: none;"><i class="glyphicon glyphicon-trash"></i></a></td>
                <td class="editable" nowrap="" id="fio:144" title="Двойной клик для редактирования">Якуненко Денис Владимирович</td>
                <td class="editable" id="job_title:144" title="Двойной клик для редактирования">Инженер-программист</td>
                <td class="editable" id="internal_phone:144" style="text-align:center" title="Двойной клик для редактирования">2013</td>
                <td class="editable" id="external_phone:144" style="text-align:center" title="Двойной клик для редактирования">3-15-25</td>
                <td class="editable" id="speed_dial:144" style="text-align:center" title="Двойной клик для редактирования">-</td>
            </tr>

            <tr>
                <th colspan="6" bgcolor="#E6E6E6" align="left" class="bg-primary"><i class="fa fa-home"></i> <strong>Камышинские МЭС ПАО "ВОЭ"</strong> <span class="pull-right"><small class="">Код: (84457); 403886, г. Камышин, ул. Рязано-Уральская, 52</small></span></th>
            </tr>

            <tr>
                <th colspan="6" bgcolor="#EEEEEE" style="text-align:center" class="">г. Камышин, 403886, ул. Рязано-Уральская, 52  код:  84457</th>
            </tr>	
            <tr onmouseover="showDel(320);" onmouseout="hideDel(320);">
                <td valign="top" height="35px" ;="" style="text-align:center; "><a href="#" onclick="delClik(320);" id="delPeople320" class="delPeople btn btn-danger btn-xs" style="display: none;"><i class="glyphicon glyphicon-trash"></i></a></td>
                <td class="editable" nowrap="" id="fio:320" title="Двойной клик для редактирования">Колдин Денис Михайлович</td>
                <td class="editable" id="job_title:320" title="Двойной клик для редактирования">Инженер-программист</td>
                <td class="editable" id="internal_phone:320" style="text-align:center" title="Двойной клик для редактирования">2111</td>
                <td class="editable" id="external_phone:320" style="text-align:center" title="Двойной клик для редактирования">-/-</td>
                <td class="editable" id="speed_dial:320" style="text-align:center" title="Двойной клик для редактирования">-</td>
            </tr>

            <tr onmouseover="showDel(321);" onmouseout="hideDel(321);">
                <td valign="top" height="35px" ;="" style="text-align:center; "><a href="#" onclick="delClik(321);" id="delPeople321" class="delPeople btn btn-danger btn-xs" style="display: none;"><i class="glyphicon glyphicon-trash"></i></a></td>
                <td class="editable" nowrap="" id="fio:321" title="Двойной клик для редактирования">Карпенко Роман Владимирович</td>
                <td class="editable" id="job_title:321" title="Двойной клик для редактирования">Инженер-программист</td>
                <td class="editable" id="internal_phone:321" style="text-align:center" title="Двойной клик для редактирования">2110</td>
                <td class="editable" id="external_phone:321" style="text-align:center" title="Двойной клик для редактирования">-/-</td>
                <td class="editable" id="speed_dial:321" style="text-align:center" title="Двойной клик для редактирования">-</td>
            </tr>

            <tr>
                <th colspan="6" bgcolor="#E6E6E6" align="left" class="bg-primary"><i class="fa fa-home"></i> <strong>Заволжские МЭС ПАО "ВОЭ"</strong> <span class="pull-right"><small class="">Код: (84479); 404143, р.п. Средняя Ахтуба, ул. Промышленная, 10А  </small></span></th>
            </tr>

            <tr>
                <th colspan="6" bgcolor="#EEEEEE" style="text-align:center" class="">р.п. Средняя Ахтуба, 404143, ул. Промышленная, 10А  код: 84479  факс: 5-43-38</th>
            </tr>	
            <tr onmouseover="showDel(258);" onmouseout="hideDel(258);">
                <td valign="top" height="35px" ;="" style="text-align:center; "><a href="#" onclick="delClik(258);" id="delPeople258" class="delPeople btn btn-danger btn-xs" style="display: none;"><i class="glyphicon glyphicon-trash"></i></a></td>
                <td class="editable" nowrap="" id="fio:258" title="Двойной клик для редактирования">Кирьянов Олег Геннадьевич</td>
                <td class="editable" id="job_title:258" title="Двойной клик для редактирования">Инженер-программист</td>
                <td class="editable" id="internal_phone:258" style="text-align:center" title="Двойной клик для редактирования">2525</td>
                <td class="editable" id="external_phone:258" style="text-align:center" title="Двойной клик для редактирования">-/-</td>
                <td class="editable" id="speed_dial:258" style="text-align:center" title="Двойной клик для редактирования">-</td>
            </tr>

            <tr>
                <th colspan="6" bgcolor="#E6E6E6" align="left" class="bg-primary"><i class="fa fa-home"></i> <strong>Михайловские МЭС ПАО "ВОЭ"</strong> <span class="pull-right"><small class="">Код: (84463); 403345, г. Михайловка, пр. Западный, 3  </small></span></th>
            </tr>

            <tr>
                <th colspan="6" bgcolor="#EEEEEE" style="text-align:center" class="">г. Михайловка, 403345, пр. Западный, 3  код: 84463   факс: 4-54-92</th>
            </tr>	
            <tr onmouseover="showDel(362);" onmouseout="hideDel(362);">
                <td valign="top" height="35px" ;="" style="text-align:center; "><a href="#" onclick="delClik(362);" id="delPeople362" class="delPeople btn btn-danger btn-xs" style="display: none;"><i class="glyphicon glyphicon-trash"></i></a></td>
                <td class="editable" nowrap="" id="fio:362" title="Двойной клик для редактирования">Шалин Александр Петрович</td>
                <td class="editable" id="job_title:362" title="Двойной клик для редактирования">Инженер-программист</td>
                <td class="editable" id="internal_phone:362" style="text-align:center" title="Двойной клик для редактирования">2222</td>
                <td class="editable" id="external_phone:362" style="text-align:center" title="Двойной клик для редактирования">2-78-08</td>
                <td class="editable" id="speed_dial:362" style="text-align:center" title="Двойной клик для редактирования">-</td>
            </tr>

            <tr>
                <th colspan="6" bgcolor="#EEEEEE" style="text-align:center" class="">г. Фролово, 403518, ул. 40 лет Октября, 373  код: 84465   факс: 4-03-54</th>
            </tr>	
            <tr onmouseover="showDel(371);" onmouseout="hideDel(371);">
                <td valign="top" height="35px" ;="" style="text-align:center; "><a href="#" onclick="delClik(371);" id="delPeople371" class="delPeople btn btn-danger btn-xs" style="display: none;"><i class="glyphicon glyphicon-trash"></i></a></td>
                <td class="editable" nowrap="" id="fio:371" title="Двойной клик для редактирования">Чекунова Елена Ивановна</td>
                <td class="editable" id="job_title:371" title="Двойной клик для редактирования">Инженер-программист</td>
                <td class="editable" id="internal_phone:371" style="text-align:center" title="Двойной клик для редактирования">-</td>
                <td class="editable" id="external_phone:371" style="text-align:center" title="Двойной клик для редактирования">4-03-54</td>
                <td class="editable" id="speed_dial:371" style="text-align:center" title="Двойной клик для редактирования">*693
                </td>
            </tr>

            <tr>
                <th colspan="6" bgcolor="#E6E6E6" align="left" class="bg-primary"><i class="fa fa-home"></i> <strong>Жирновские МЭС ПАО "ВОЭ"</strong> <span class="pull-right"><small class="">Код: (84454); 403791, г. Жирновск, ул. Хлебозаводская, 1А</small></span></th>
            </tr>

            <tr>
                <th colspan="6" bgcolor="#EEEEEE" style="text-align:center" class="">г. Жирновск, 403791, ул. Хлебозаводская, 1А  код: 84454  факс: 5-38-96</th>
            </tr>	
            <tr onmouseover="showDel(207);" onmouseout="hideDel(207);">
                <td valign="top" height="35px" ;="" style="text-align:center; "><a href="#" onclick="delClik(207);" id="delPeople207" class="delPeople btn btn-danger btn-xs" style="display: none;"><i class="glyphicon glyphicon-trash"></i></a></td>
                <td class="editable" nowrap="" id="fio:207" title="Двойной клик для редактирования">Фисенко Сергей Федорович</td>
                <td class="editable" id="job_title:207" title="Двойной клик для редактирования">Инженер-программист</td>
                <td class="editable" id="internal_phone:207" style="text-align:center" title="Двойной клик для редактирования">2424</td>
                <td class="editable" id="external_phone:207" style="text-align:center" title="Двойной клик для редактирования">5-45-44
                </td>
                <td class="editable" id="speed_dial:207" style="text-align:center" title="Двойной клик для редактирования">-</td>
            </tr>

            <tr>
                <th colspan="6" bgcolor="#E6E6E6" align="left" class="bg-primary"><i class="fa fa-home"></i> <strong>Суровикинские МЭС ПАО "ВОЭ"</strong> <span class="pull-right"><small class="">Код: (84473); 404411, г. Суровикино, ул. Шоссейная, 5</small></span></th>
            </tr>

            <tr>
                <th colspan="6" bgcolor="#EEEEEE" style="text-align:center" class="">г. Суровикино, 404411, ул. Шоссейная, 5  код: 84473  факс: 2-26-75</th>
            </tr>	
            <tr onmouseover="showDel(400);" onmouseout="hideDel(400);">
                <td valign="top" height="35px" ;="" style="text-align:center; "><a href="#" onclick="delClik(400);" id="delPeople400" class="delPeople btn btn-danger btn-xs" style="display: none;"><i class="glyphicon glyphicon-trash"></i></a></td>
                <td class="editable" nowrap="" id="fio:400" title="Двойной клик для редактирования">Аликов Вячеслав Геннадьевич</td>
                <td class="editable" id="job_title:400" title="Двойной клик для редактирования">Инженер-программист</td>
                <td class="editable" id="internal_phone:400" style="text-align:center" title="Двойной клик для редактирования">2617</td>
                <td class="editable" id="external_phone:400" style="text-align:center" title="Двойной клик для редактирования">2-16-56</td>
                <td class="editable" id="speed_dial:400" style="text-align:center" title="Двойной клик для редактирования">-
                </td>
            </tr>

            <tr>
                <th colspan="6" bgcolor="#E6E6E6" align="left" class="bg-primary"><i class="fa fa-home"></i> <strong>Северные МЭС ПАО "ВОЭ"</strong> <span class="pull-right"><small class="">Код: (84442); 403113, г. Урюпинск, ул. Нижняя, 9</small></span></th>
            </tr>

            <tr>
                <th colspan="6" bgcolor="#EEEEEE" style="text-align:center" class="">г. Урюпинск, 403113, ул. Нижняя, 9  код: 84442  факс: 4-43-21</th>
            </tr>	
            <tr onmouseover="showDel(463);" onmouseout="hideDel(463);">
                <td valign="top" height="35px" ;="" style="text-align:center; "><a href="#" onclick="delClik(463);" id="delPeople463" class="delPeople btn btn-danger btn-xs" style="display: none;"><i class="glyphicon glyphicon-trash"></i></a></td>
                <td class="editable" nowrap="" id="fio:463" title="Двойной клик для редактирования">Климов Андрей Александрович</td>
                <td class="editable" id="job_title:463" title="Двойной клик для редактирования">Инженер-программист</td>
                <td class="editable" id="internal_phone:463" style="text-align:center" title="Двойной клик для редактирования">2315</td>
                <td class="editable" id="external_phone:463" style="text-align:center" title="Двойной клик для редактирования">4-58-33
                </td>
                <td class="editable" id="speed_dial:463" style="text-align:center" title="Двойной клик для редактирования">-</td>
            </tr>

        </tbody>
    </table>
    </div>
</div>
@endsection