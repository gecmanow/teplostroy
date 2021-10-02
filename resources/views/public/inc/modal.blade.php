<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" id="myModalLabel">Заполните форму, и наш менеджер свяжется с Вами в ближайшее время</h5>
            </div>
            <form method="post" onsubmit="reachGoal('re_callback'); return true;" action="{{ route('modal') }}">
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
                <div class="modal-body">
                    <div class="form-group">
                        <label>Ваше имя:</label>
                        <input type="text" class="form-control" name="name"><br/>
                    </div>
                    <div class="form-group">
                        <label>Телефон:</label>
                        <input type="text" class="form-control" name="phone"><br/>
                    </div>
                    <div class="form-group">
                        <label>Дополнительная информация:</label>
                        <input type="text" class="form-control" name="comment">
                    </div>
                    <div id="g-recaptcha" class="g-recaptcha" data-sitekey="6Lf0_A8UAAAAAFLmY14_F_LbjF_qHKBoUq6PNcwp"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                    <button type="submit" class="btn btn-warning" >Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>
