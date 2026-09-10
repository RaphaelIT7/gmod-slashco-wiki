<function name="GetPickedSlasher" parent="Player" type="classfunc">
	<description>
		Returns the name of the Slasher this player has picked in the Lobby.<br>
		Purely cosmetic - only used to display which Slasher they'll be playing as.<br>
		This function is created by the <page text="DTVar Networking System">DTVar Networking</page> system.
	</description>
	<realm>Shared</realm>
	<rets>
		<ret name="slasherName" type="string">The current value, or an empty string if nothing has been picked yet.</ret>
	</rets>
</function>