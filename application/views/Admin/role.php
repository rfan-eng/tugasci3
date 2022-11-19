<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-success" role="alert"></div>'); ?>
            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" class="btn btn-primary" data-toggle="modal" data-target="#Addnewrole">Add new role</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($role as $r) : ?>
                        <tr>
                            <th scope=row><?= $i; ?></th>
                            <td><?= $r['role']; ?></td>
                            <td>
                                <a href="<?=base_url('admin/roleAccess/') .$r['id']?>" class="btn btn-warning btn-sm">Access</a>
                                <button href="#" class="btn btn-success btn-sm" data-toggle="modal" data-popup="tootip" data-placement="top" title="edit" data-target="#roleedit<?= $r['id']; ?>">edit</button> 
                                <button onclick="hapusRole()" id="tombol-hapus-role" class="btn btn-danger btn-sm tombol hapus">Delete</button>
                            </td>   
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<div class="modal fade" id="Addnewrole" tabindex="-1" aria-labelledby="AddnewroleLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddnewroleLabel">Add New Menu</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Menu Name">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>

</div>
<?php foreach ($role as $r) : ?>
    <div class="modal fade" id="Addnewrole<?= $r['id']; ?>" tabindex="-1" aria-labelledby="AddnewroleLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddnewroleLabel">Edit Menu</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/hapusrole/'); ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="role" name="role" placeholder="Menu Name">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Done</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
<?php endforeach; ?>

<!--modal edit-->  

<?php foreach ($role as $r) : ?> 

<div class="modal fade" id="roleedit<?= $r['id']; ?>" tabindex="-1" aria-labelledby="roleeditLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="roleeditLabel">Edit Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form action="<?= base_url('admin/editrole'); ?>" method="post">

        <input type="hidden" class="form-control" readonly value="<?= $r['id']; ?>" name=""> 

            <div class="modal-body">
                <div class="form-group">
                <input type="hidden" class="form-control" value="<?= $r['id'] ?>" id="id" name="id" 
                    readonly>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="<?= $r['role'] ?>" id="role" name="role" placeholder="Menu Role">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>
</div>
</div>


<?php endforeach; ?>
                