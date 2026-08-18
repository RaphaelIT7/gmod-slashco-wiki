<function name="GetPerks" parent="SlashCo" type="libraryfunc">
	<description>
		Returns all registered perks.<br>
		Only entries containing an `ID` field are included in the returned sequential table.
	</description>
	<realm>Shared</realm>
	<group>Perks</group>
	<rets>
		<ret name="perks" type="table">Sequential table containing all registered perk definitions</ret>
	</rets>
</function>