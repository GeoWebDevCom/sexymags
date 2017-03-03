<div class="flex-center position-ref full-height bg-blk">

    <div class="content">

        <div class="row">
            <div class="col-md-12">

                <div class="box box-default">
                    <div class="pagination" id="menu">
                        <ul class="navbar-btn list-group">
                            <li class="ml {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
                                <a href="{{ $paginator->url($paginator->currentPage()-1) }}" class="glyphicon glyphicon-circle-arrow-left prev" role="button"></a>
                            </li>
                            <ul class="list-group mg-lf bg-blk">
                            @for ($i = $paginator->currentPage(); $i <= $paginator->currentPage()+5; $i++)
                                <li class="list-group-item fl bg-blk {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                                    <a href="{{ $paginator->url($i) }}" class="bg-blk">{{ $i }}</a>
                                </li>
                            @endfor
                            </ul>
                            <li class="mr {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                                <a href="{{ $paginator->url($paginator->currentPage()+1) }}" class="glyphicon glyphicon-circle-arrow-right next" role="button"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>