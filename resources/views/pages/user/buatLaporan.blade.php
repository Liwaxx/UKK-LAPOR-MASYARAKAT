@extends('masterUser')
@section('title')
Lapor
@endsection
@section('pages')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph text-success">
                    </i>
                </div>
                <div>Buat Laporan
                    <div class="page-title-subheading">
                        Laporkan masalah setempat
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Form Laporan</h5>
                    <form class="">
                        <div class="position-relative row form-group"><label for="exampleEmail"
                                class="col-sm-2 col-form-label">Kerusakan</label>
                            <div class="col-sm-10"><input name="email" id="exampleEmail"
                                    placeholder="with a placeholder" type="email" class="form-control"></div>
                        </div>
                        <div class="position-relative row form-group"><label for="exampleSelect"
                                class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10"><select name="select" id="exampleSelect"
                                    class="form-control"></select></div>
                        </div>
                        <div class="position-relative row form-group"><label for="exampleText"
                                class="col-sm-2 col-form-label">Keterangan Singkat</label>
                            <div class="col-sm-10"><textarea name="text" id="exampleText"
                                    class="form-control"></textarea></div>
                        </div>
                        <div class="position-relative row form-group"><label for="exampleFile"
                                class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10"><input name="file" id="exampleFile" type="file"
                                    class="form-control-file">
                                <small class="form-text text-muted">
                                    Sertakan gambar yang jelas
                                </small>
                            </div>
                        </div>
                        <div class="position-relative row form-check">
                            <div class="">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
