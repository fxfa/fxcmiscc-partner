<?php
// auto-generated by sfPropelCrud
// date: 2012/11/21 21:11:05
?>
<?php use_helper('Object') ?>

<?php echo form_tag('zMlmMemberQuestionnaire/update') ?>

<?php echo object_input_hidden_tag($mlm_member_questionnaire, 'getQuestionnaireId') ?>

<table>
<tbody>
<tr>
  <th>Member*:</th>
  <td><?php echo object_input_tag($mlm_member_questionnaire, 'getMemberId', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Q1:</th>
  <td><?php echo object_input_tag($mlm_member_questionnaire, 'getQ1', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Q2:</th>
  <td><?php echo object_input_tag($mlm_member_questionnaire, 'getQ2', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Q3:</th>
  <td><?php echo object_input_tag($mlm_member_questionnaire, 'getQ3', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Q4:</th>
  <td><?php echo object_input_tag($mlm_member_questionnaire, 'getQ4', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Q5:</th>
  <td><?php echo object_input_tag($mlm_member_questionnaire, 'getQ5', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Q6:</th>
  <td><?php echo object_input_tag($mlm_member_questionnaire, 'getQ6', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Q7:</th>
  <td><?php echo object_input_tag($mlm_member_questionnaire, 'getQ7', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Q8:</th>
  <td><?php echo object_input_tag($mlm_member_questionnaire, 'getQ8', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>S1:</th>
  <td><?php echo object_input_tag($mlm_member_questionnaire, 'getS1', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>S2:</th>
  <td><?php echo object_input_tag($mlm_member_questionnaire, 'getS2', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>S3:</th>
  <td><?php echo object_input_tag($mlm_member_questionnaire, 'getS3', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Status code:</th>
  <td><?php echo object_input_tag($mlm_member_questionnaire, 'getStatusCode', array (
  'size' => 30,
)) ?></td>
</tr>
<tr>
  <th>Created by*:</th>
  <td><?php echo object_input_tag($mlm_member_questionnaire, 'getCreatedBy', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Created on*:</th>
  <td><?php echo object_input_date_tag($mlm_member_questionnaire, 'getCreatedOn', array (
  'rich' => true,
  'withtime' => true,
)) ?></td>
</tr>
<tr>
  <th>Updated by*:</th>
  <td><?php echo object_input_tag($mlm_member_questionnaire, 'getUpdatedBy', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Updated on*:</th>
  <td><?php echo object_input_date_tag($mlm_member_questionnaire, 'getUpdatedOn', array (
  'rich' => true,
  'withtime' => true,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('save') ?>
<?php if ($mlm_member_questionnaire->getQuestionnaireId()): ?>
  &nbsp;<?php echo link_to('delete', 'zMlmMemberQuestionnaire/delete?questionnaire_id='.$mlm_member_questionnaire->getQuestionnaireId(), 'post=true&confirm=Are you sure?') ?>
  &nbsp;<?php echo link_to('cancel', 'zMlmMemberQuestionnaire/show?questionnaire_id='.$mlm_member_questionnaire->getQuestionnaireId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('cancel', 'zMlmMemberQuestionnaire/list') ?>
<?php endif; ?>
</form>
