<?php
// auto-generated by sfPropelCrud
// date: 2012/04/20 19:13:40
?>
<?php use_helper('Object') ?>
<?php use_helper('I18N') ?>
<!-- TinyMCE -->
<script type="text/javascript">
$(function() {
    $("#btnSave").button({
        icons: {
            primary: "ui-icon-circle-check"
        }
    })
    $("#btnCancel").button({
        icons: {
            primary: "ui-icon-circle-arrow-w"
        }
    }).click(function(){
        $("#upgradeForm").attr("action", "<?php echo url_for("/finance/referralBonus")?>");
    });

});
</script>

<?php echo form_tag('finance/updateReferralBonus', 'id=upgradeForm') ?>

<?php echo object_input_hidden_tag($distCommissionLedger, 'getCommissionId') ?>

<div style="padding: 10px; top: 10px; width: 95%">
    <div class="portlet">
        <div class="portlet-header">Referral Bonus Detail</div>
        <div class="portlet-content">
            <table class="sf_admin_list" cellpadding="3" width="100%">
                <tbody>
                <tr>
                    <td colspan="2">
                        <?php if ($sf_flash->has('successMsg')): ?>
                        <div class="ui-widget">
                            <div style="margin-top: 20px; padding: 0 .7em;" class="ui-state-highlight ui-corner-all">
                                <p><span style="float: left; margin-right: .3em;" class="ui-icon ui-icon-info"></span>
                                    <strong><?php echo $sf_flash->get('successMsg') ?></strong></p>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ($sf_flash->has('errorMsg')): ?>
                        <div class="ui-widget">
                            <div style="margin-top: 20px; padding: 0 .7em;" class="ui-state-error ui-corner-all">
                                <p><span style="float: left; margin-right: .3em;" class="ui-icon ui-icon-alert"></span>
                                    <strong><?php echo $sf_flash->get('errorMsg') ?></strong></p>
                            </div>
                        </div>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php
                    $existDist = MlmDistributorPeer::retrieveByPK($distCommissionLedger->getDistId());
                ?>
                <tr>
                    <th class="caption">Distributor Code :</th>
                    <td class="value"><?php
                        echo $existDist->getDistributorCode() ?></td>
                </tr>
                <tr>
                    <th class="caption">Full Name :</th>
                    <td class="value"><?php
                        echo $existDist->getFullName() ?></td>
                </tr>
                <tr>
                    <th class="caption">MT4 ID :</th>
                    <td class="value"><?php
                        $c = new Criteria();
                        $c->add(MlmDistMt4Peer::DIST_ID, $existDist->getDistributorId());
                        $distMt4s = MlmDistMt4Peer::doSelect($c);
                        $mt4Id = "";
                        $mt4Password = "";
                        if (count($distMt4s)) {
                            foreach ($distMt4s as $distMt4) {
                                if ($mt4Id != "")
                                    $mt4Id .= ",";
                                if ($mt4Password != "")
                                    $mt4Password .= ",";
                                $mt4Id .= $distMt4->getMt4UserName();
                                $mt4Password .= $distMt4->getMt4Password();
                            }
                        }
                        echo $mt4Id ?></td>
                </tr>
                <tr>
                    <th class="caption">Amount *:</th>
                    <td class="value"><?php echo object_input_tag($distCommissionLedger, 'getCredit', array(
                                                                                           'size' => 20,
                                                                                            'readonly' => 'readonly',
                                                                                      )) ?></td>
                </tr>
                <tr>
                    <th class="caption">Status code:</th>
                    <td class="value"><?php
                        $arr = array();
                        $arr['PENDING'] = 'PENDING';
                        $arr['REJECT'] = 'REJECT';
                        $arr['COMPLETE'] = 'COMPLETE';
                        echo select_tag('status_code', options_for_select($arr, $distCommissionLedger->getStatusCode()));
                     ?></td>
                </tr>
                <tr>
                    <th class="caption">Remarks:</th>
                    <td class="value"><?php echo object_textarea_tag($distCommissionLedger, 'getRemark', array(
                                                                                                          'size' => '30x3',
                                                                                                     )) ?></td>
                </tr>
                </tbody>
            </table>
            <hr/>
            <button id="btnSave">Save</button>
            <button id="btnCancel">Cancel</button>
<!--            &nbsp;--><?php //echo link_to('cancel', 'finance/ecashWithdrawal', array("id" => "btnCancel")) ?>
        </div>
    </div>
</div>
</form>