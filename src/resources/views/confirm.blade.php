@extends('layouts.app')
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
    @endsection

    @section('content')
        <div class="confirm__content">
            <div class="confirm__heading">
                <h2>追加車確認画面</h2>
            </div>
            <form class="form">
                <div class="confirm-table">
                    <table class="confirm-table__innner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">車名</th>
                            <td class="confirm-table__text">
                                <input type="text" name="carname" value="" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">車種</th>
                            <td class="confirm-table__text">
                                <input type="text" name="makes" value="" readonly />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="confirm__message">
                    <h3>この内容を追加しますがよろしいですか？</h3>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">追加</button>
                </div>
            </form>
        </div>
    @endsection