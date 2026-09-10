<function name="SlasherChosen" parent="" type="libraryfunc">
	<description>
		<internal></internal>
		Sends the picked slasher name to the server over the `SlashCo:SelectSlasher` net message.<br>
		Called when the player confirms their pick in the slasher selection frame from <page>DrawTheSlasherSelectorBox</page>.
	</description>
	<realm>Client</realm>
	<args>
		<arg name="pickedSlasher" type="string">The name of the slasher the player picked</arg>
	</args>
</function>
