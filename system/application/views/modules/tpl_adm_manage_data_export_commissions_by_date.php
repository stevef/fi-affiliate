<?php if (!defined('BASEPATH')) exit('No direct script access allowed');?>
<form id="form"  method="post" class="form-horizontal"  role="form">
<div class="row">
   	<div class="col-md-4">
    <?=_generate_sub_headline('data_export')?>
    </div>
    <div class="col-md-8 text-right">        
        <a href="<?=admin_url()?>export/view_export_modules" class="btn btn-primary"><i class="fa fa-search"></i> <span class="hidden-xs"><?=$this->lang->line('data_export_modules')?></span></a>
    </div>
</div>
<hr />
<div class="row">   
	<div class="col-md-12">
		<div class="box-info">
        <h4 class="header"><i class="fa fa-cog"></i> <?=$this->lang->line('export_commissions_by_date')?></h4>
            <div class="form-group"> 
    		    <label class="col-lg-3 control-label"><?=$this->lang->line('module_data_export_commissions_by_date_delimiter')?></label>
        		<div class="col-lg-5">
        			<input name="module_data_export_commissions_by_date_delimiter" id="module_data_export_commissions_by_date_delimiter" type="text"  value="<?=$this->validation->module_data_export_commissions_by_date_delimiter?>" class="form-control" />
        		</div>
        	</div>
            <hr />
            <div class="form-group"> 
    		    <label class="col-lg-3 control-label"><?=$this->lang->line('module_data_export_commissions_by_date_commission_type')?></label>
        		<div class="col-lg-5">
        			 <?=form_dropdown('module_data_export_commissions_by_date_commission_type', array('all' => 'all', 'pending' => 'pending', 'unpaid' => 'unpaid', 'paid' => 'paid'), $this->validation->module_data_export_commissions_by_date_commission_type, 'class="form-control"')?>
        		</div>
        	</div>
            <hr />
            <div class="form-group"> 
    		    <label class="col-lg-3 control-label"><?=$this->lang->line('module_data_export_commissions_by_date_start_date')?></label>
        		<div class="col-lg-5">
        			<input name="module_data_export_commissions_by_date_start_date" id="module_data_export_commissions_by_date_start_date" type="text"  value="<?=$this->validation->module_data_export_commissions_by_date_start_date?>" class="datepicker-input form-control" />
        		</div>
        	</div>
            <hr />
            <div class="form-group"> 
    		    <label class="col-lg-3 control-label"><?=$this->lang->line('module_data_export_commissions_by_date_end_date')?></label>
        		<div class="col-lg-5">
        			<input name="module_data_export_commissions_by_date_end_date" id="module_data_export_commissions_by_date_end_date" type="text"  value="<?=$this->validation->module_data_export_commissions_by_date_end_date?>" class="datepicker-input form-control" />
        		</div>
        	</div>
            <hr />
            <div class="form-group">
                <div class="col-md-offset-3 col-sm-9">
                    <button class="btn btn-success block-phone" id="top" type="submit"><i class="fa fa-refresh"></i> <?=$this->lang->line('save_changes')?></button>
                    
                </div>
            </div>
    	</div>        
	</div>
</div>            
</form>