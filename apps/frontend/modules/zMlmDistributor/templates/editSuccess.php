<?php
// auto-generated by sfPropelCrud
// date: 2013/03/12 13:31:26
?>
<?php use_helper('Object') ?>

<?php echo form_tag('zMlmDistributor/update') ?>

<?php echo object_input_hidden_tag($mlm_distributor, 'getDistributorId') ?>

<table>
<tbody>
<tr>
  <th>Distributor code*:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getDistributorCode', array (
  'size' => 50,
)) ?></td>
</tr>
<tr>
  <th>User*:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getUserId', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Status code*:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getStatusCode', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Full name:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getFullName', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Nickname:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getNickname', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Mt4 user name:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getMt4UserName', array (
  'size' => 50,
)) ?></td>
</tr>
<tr>
  <th>Mt4 password:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getMt4Password', array (
  'size' => 50,
)) ?></td>
</tr>
<tr>
  <th>Ic:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getIc', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Country:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getCountry', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Address:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getAddress', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Address2:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getAddress2', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>City:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getCity', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>State:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getState', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Postcode:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getPostcode', array (
  'size' => 30,
)) ?></td>
</tr>
<tr>
  <th>Email:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getEmail', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Alternate email:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getAlternateEmail', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Contact:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getContact', array (
  'size' => 30,
)) ?></td>
</tr>
<tr>
  <th>Gender:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getGender', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Dob:</th>
  <td><?php echo object_input_date_tag($mlm_distributor, 'getDob', array (
  'rich' => true,
)) ?></td>
</tr>
<tr>
  <th>Bank name:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getBankName', array (
  'size' => 50,
)) ?></td>
</tr>
<tr>
  <th>Bank acc no:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getBankAccNo', array (
  'size' => 50,
)) ?></td>
</tr>
<tr>
  <th>Bank holder name:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getBankHolderName', array (
  'size' => 50,
)) ?></td>
</tr>
<tr>
  <th>Bank swift code:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getBankSwiftCode', array (
  'size' => 50,
)) ?></td>
</tr>
<tr>
  <th>Visa debit card:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getVisaDebitCard', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Ezy cash card:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getEzyCashCard', array (
  'size' => 50,
)) ?></td>
</tr>
<tr>
  <th>Tree level:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getTreeLevel', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Tree structure:</th>
  <td><?php echo object_textarea_tag($mlm_distributor, 'getTreeStructure', array (
  'size' => '30x3',
)) ?></td>
</tr>
<tr>
  <th>Placement tree level:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getPlacementTreeLevel', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Placement tree structure:</th>
  <td><?php echo object_textarea_tag($mlm_distributor, 'getPlacementTreeStructure', array (
  'size' => '30x3',
)) ?></td>
</tr>
<tr>
  <th>Init rank:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getInitRankId', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Init rank code:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getInitRankCode', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Upline dist:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getUplineDistId', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Upline dist code:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getUplineDistCode', array (
  'size' => 50,
)) ?></td>
</tr>
<tr>
  <th>Tree upline dist:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getTreeUplineDistId', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Tree upline dist code:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getTreeUplineDistCode', array (
  'size' => 50,
)) ?></td>
</tr>
<tr>
  <th>Total left:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getTotalLeft', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Total right:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getTotalRight', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Placement position:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getPlacementPosition', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Placement datetime:</th>
  <td><?php echo object_input_date_tag($mlm_distributor, 'getPlacementDatetime', array (
  'rich' => true,
  'withtime' => true,
)) ?></td>
</tr>
<tr>
  <th>Rank:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getRankId', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Rank code:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getRankCode', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Active datetime:</th>
  <td><?php echo object_input_date_tag($mlm_distributor, 'getActiveDatetime', array (
  'rich' => true,
  'withtime' => true,
)) ?></td>
</tr>
<tr>
  <th>Activated by:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getActivatedBy', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Leverage:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getLeverage', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Spread:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getSpread', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Deposit currency:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getDepositCurrency', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Deposit amount:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getDepositAmount', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Sign name:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getSignName', array (
  'size' => 50,
)) ?></td>
</tr>
<tr>
  <th>Sign date:</th>
  <td><?php echo object_input_date_tag($mlm_distributor, 'getSignDate', array (
  'rich' => true,
  'withtime' => true,
)) ?></td>
</tr>
<tr>
  <th>Term condition:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getTermCondition', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Ib commission*:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getIbCommission', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Is ib*:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getIsIb', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Created by*:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getCreatedBy', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Created on*:</th>
  <td><?php echo object_input_date_tag($mlm_distributor, 'getCreatedOn', array (
  'rich' => true,
  'withtime' => true,
)) ?></td>
</tr>
<tr>
  <th>Updated by*:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getUpdatedBy', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Updated on*:</th>
  <td><?php echo object_input_date_tag($mlm_distributor, 'getUpdatedOn', array (
  'rich' => true,
  'withtime' => true,
)) ?></td>
</tr>
<tr>
  <th>Package purchase flag*:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getPackagePurchaseFlag', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>File bank pass book:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getFileBankPassBook', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>File proof of residence:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getFileProofOfResidence', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>File nric:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getFileNric', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Excluded structure:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getExcludedStructure', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Product mte:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getProductMte', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Product fxgold:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getProductFxgold', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Remark:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getRemark', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Loan account:</th>
  <td><?php echo object_input_tag($mlm_distributor, 'getLoanAccount', array (
  'size' => 20,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('save') ?>
<?php if ($mlm_distributor->getDistributorId()): ?>
  &nbsp;<?php echo link_to('delete', 'zMlmDistributor/delete?distributor_id='.$mlm_distributor->getDistributorId(), 'post=true&confirm=Are you sure?') ?>
  &nbsp;<?php echo link_to('cancel', 'zMlmDistributor/show?distributor_id='.$mlm_distributor->getDistributorId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('cancel', 'zMlmDistributor/list') ?>
<?php endif; ?>
</form>
