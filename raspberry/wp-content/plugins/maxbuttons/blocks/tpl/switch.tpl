	  {if:label}	<label for='%%id%%' class='switch_label %%name%%'>%%label%%</label> {/if:label}
<div class='input switch_button %%name%%'>
		<label for='%%id%%' tabindex='0'>
		<input type='checkbox' name='%%name%%' id='%%id%%' data-field='%%name%%'
			value='%%value%%'
			%%checked%%
			tabindex='-1'
			{if:disabled} disabled {/if:disabled}
		/>

		<div class='the_switch' >

		{if:icon}	<i class='dashicons %%icon%%'></i>	{/if:icon}
		</div>
		</label>
		{if:help}<div class="help dashicons dashicons-info "><span>%%help%%</span></div>{/if:help}
</div>
