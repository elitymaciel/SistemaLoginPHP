<?php $v->layout("_theme")?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Cadastro de Usuários</h1>
            </div>

            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= SITE['base_url']?>esc/usuarios"">Usuários</a></li>
              <li class="breadcrumb-item active">Cadastro de Usuários</li>
            </ol>
          </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <?php if (!empty($_SESSION['alert'])) {
                echo $_SESSION['alert'];
            } ?>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Formulario para cadastro</h3>
                    </div>
                    <form action="" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nome:</label>
                                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite nome do usuario" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class=" form-group">
                                            <label>Sobrenome:</label>
                                            <input type="text" id="sobrenome" name="sobrenome"
                                            class="form-control" placeholder="Sobrenome" required>
                                        </div>
                                </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="text" id="email" name="email" class="form-control"  placeholder="Digite seu Email" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Senha:</label>
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Digite sua Senha ..." required>
                                        </div>
                                    </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Grupo:</label>
                                        <select name="funcionario"
                                            class="form-control select2bs4 select2-hidden-accessible"
                                            style="width: 100%;" data-select2-id="17" tabindex="-1"
                                            aria-hidden="true">
                                            <?php foreach ($func as $key => $value): ?>
                                            <option value="<?= $value->id ?>">
                                                <?php print_r(ucfirst($value->nome));?>
                                            </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="salvar" class="btn btn-info">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>