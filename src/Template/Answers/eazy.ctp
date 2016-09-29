<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12 col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1">
            <div class="panel-group">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Q1.</b> Les films de 1984
                    </div>
                    <div class="panel-body">
                        <?php foreach($exo1 as $exo): ?>
                            <li class="list-group-item"><?= $exo->title ?></li>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Q2.</b> Les films tournés depuis les années 2000
                    </div>
                    <div class="panel-body">
                        <?php foreach($exo2 as $exo): ?>
                            <li class="list-group-item"><?= $exo->title ?></li>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Q3.</b> Les films avec moins d'1 million de budget
                    </div>
                    <div class="panel-body">
                        <?php foreach($exo3 as $exo): ?>
                            <li class="list-group-item"><?= $exo->title ?></li>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Q4.</b> Les films avec un budget entre 10 et 30 millions
                    </div>
                    <div class="panel-body">
                        <?php foreach($exo4 as $exo): ?>
                            <li class="list-group-item"><?= $exo->title ?></li>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Q5.</b> Les films de comédie tournés entre 1980 et 1990
                    </div>
                    <div class="panel-body">
                        <?php foreach($exo5 as $exo): ?>
                            <li class="list-group-item"><?= $exo->title ?></li>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Q6.</b> Les acteurs qui ont joué dans plus d'un film
                    </div>
                    <div class="panel-body">
                        <?php foreach($exo6 as $exo): ?>
                            <li class="list-group-item"><?= $exo->firstname . ' ' . $exo->lastname . '- Nb: ' .$exo->nb ?></li>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Q7.</b> Les films dont les titres commencent par "P"
                    </div>
                    <div class="panel-body">
                        <?php foreach($exo7 as $exo): ?>
                            <li class="list-group-item"><?= $exo->title ?></li>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Q8.</b> Combien de Coppola ont tourné les films
                    </div>
                    <div class="panel-body">
                        <li class="list-group-item"><?= $exo8 ?></li>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Q9.</b> Les films de guerre ou historiques
                    </div>
                    <div class="panel-body">
                        <?php foreach($exo9 as $exo): ?>
                            <li class="list-group-item"><?= $exo->title ?></li>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Q10.</b> Le budget total de Coppola pour tous ses films
                    </div>
                    <div class="panel-body">
                        <li class="list-group-item"><?= $exo10 ?></li>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Q11.</b> Les films de Comédie et d'Horreur
                    </div>
                    <div class="panel-body">
                        <?php foreach($exo11 as $exo): ?>
                            <li class="list-group-item"><?= $exo->title ?></li>
                        <?php endforeach; ?>
                    </div>
                </div>


            </div>
        </div>

        <div class="col-md-4 col-lg-4 hidden-xs hidden-sm">
            <div class="table-responsive table-bordered">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('title','Titre') ?></th>
                            <th><?= $this->Paginator->sort('Directors.lastname','Réalisateur') ?></th>
                            <th><?= $this->Paginator->sort('release_date','Date') ?></th>
                            <th><?= $this->Paginator->sort('budget','Budget') ?></th>
                            <th><?= $this->Paginator->sort('Categories.name','Catégorie') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($movies as $movie): ?>
                            <tr>
                                <td><?= $movie->title ?></td>
                                <td><?= $movie->has('director') ? $movie->director->lastname : '' ?></td>
                                <td><?= $movie->release_date ?></td>
                                <td><?= $movie->budget ?></td>
                                <td>
                                    <?php foreach($movie->categories as $category){
                                        echo $category->name.' ';
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>