@extends('admin.layout-dashboard')

@section('title', 'Управление брендами')

@section('brands')

<div class="row title-menu">Управление брендами</div>

<div class="table-wrap">
    <table class="brands-info">

        <thead>
            <tr>
                <th>id</th>
                <th>название</th>
                <th>ссылка</th>
                <th>картинка</th>
                <th>путь до картинки</th>
                <th>description</th>
                <th>meta теги</th>
                <th>изменить</th>
                <th>удалить</th>
            </tr>
        </thead>

        <tbady>

            <tr>
                <td>1</td>

                <td>Samsung</td>

                <td>/brand/samsung</td>

                <td>
                    <div class="row r-c">
                        <img src="{{ asset('/images/brands/samsung/samsung.png') }}" alt="" class="thumb">
                        <span>samsung.jpg</span>
                    </div>
                </td>

                <td>/images/brand/samsung/</td>

                <td>null</td>

                <td>null</td>

                <td>
                    <a href="">
                        <svg class="edit" fill="currentColor">
                            <use xlink:href="{{ asset('/images/btns/edit.svg') }}#Capa_1"/>
                        </svg>
                    </a>
                </td>

                <td>
                    <a href="">
                        <svg class="delete" fill="currentColor">
                            <use xlink:href="{{ asset('/images/btns/delete.svg') }}#Capa_1"/>
                        </svg>
                    </a>
                </td>
            </tr>

        </tbady>

    </table>
</div>

@endsection