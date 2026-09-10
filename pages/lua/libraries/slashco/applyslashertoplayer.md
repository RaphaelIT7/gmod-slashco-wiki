<function name="ApplySlasherToPlayer" parent="SlashCo" type="libraryfunc">
	<description>
		Applies the slasher previously assigned to the player via <page>SlashCo.SelectSlasher</page>, by setting their `Slasher` networked string.<br>
		Does nothing if no slasher was assigned to the player for the current round.
	</description>
	<realm>Server</realm>
	<group>Slasher</group>
	<args>
		<arg name="ply" type="Player">The player to apply the assigned slasher to</arg>
	</args>
</function>
