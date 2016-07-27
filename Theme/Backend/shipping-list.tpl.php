<?php
/**
 * Orange Management
 *
 * PHP Version 7.0
 *
 * @category   TBD
 * @package    TBD
 * @author     OMS Development Team <dev@oms.com>
 * @author     Dennis Eichhorn <d.eichhorn@oms.com>
 * @copyright  2013 Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://orange-management.com
 */
/**
 * @var \phpOMS\Views\View $this
 */

$footerView = new \Web\Views\Lists\PaginationView($this->app, $this->request, $this->response);
$footerView->setTemplate('/Web/Templates/Lists/Footer/PaginationBig');

$footerView->setPages(1 / 25);
$footerView->setPage(1);
$footerView->setResults(1);

echo $this->getData('nav')->render(); ?>

<div class="box w-100">
    <table class="table">
        <caption><?= $this->getText('Shipping'); ?></caption>
        <thead>
        <tr>
            <td><?= $this->getText('ID'); ?>
            <td><?= $this->getText('Reference'); ?>
            <td><?= $this->getText('Status'); ?>
            <td><?= $this->getText('Service'); ?>
            <td class="wf-100"><?= $this->getText('Name'); ?>
            <td><?= $this->getText('Creator'); ?>
            <td><?= $this->getText('Created'); ?>
        <tfoot>
        <tr><td colspan="7"><?= $footerView->render(); ?>
        <tbody>
        <?php $c = 0; foreach ([] as $key => $value) : $c++;
        $url = \phpOMS\Uri\UriFactory::build('/{/lang}/backend/checklist/single?id=' . $value->getId()); ?>
        <tr>
            <td><a href="<?= $url; ?>"><?= $value->getId(); ?></a>
            <td><a href="<?= $url; ?>"><?= $value->getName(); ?></a>
            <td><a href="<?= $url; ?>"><?= $value->getParent(); ?></a>
            <td><a href="<?= $url; ?>"><?= $value->getUnit(); ?></a>
                <?php endforeach; ?>
                <?php if($c === 0) : ?>
        <tr>
            <td colspan=7" class="empty"><?= $this->getText('Empty'); ?>
                <?php endif; ?>
    </table>
</div>
