@if(session('error'))
    <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <i class="fa fa-exclamation-triangle"></i> &nbsp;&nbsp; <strong>Erro! </strong> {{ session('error') }}.
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <i class="fa fa-check-circle"></i> &nbsp;&nbsp;<strong>Sucesso! </strong> {{ session('success') }}.
    </div>
@endif
@if(session('warning'))
    <div class="alert alert-warning alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <i class="fa fa-exclamation-triangle"></i> &nbsp;&nbsp; <strong>Aviso! </strong> {{ session('warning') }}.
    </div>
@endif
@if(session('info'))
    <div class="alert alert-info alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <i class="fa fa-info-circle"></i> &nbsp;&nbsp;<strong>Info! </strong> {{ session('info') }}.
    </div>
@endif
