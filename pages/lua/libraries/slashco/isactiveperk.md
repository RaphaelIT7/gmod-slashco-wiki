<function name="IsActivePerk" parent="SlashCo" type="libraryfunc">
	<description>
		Checks whether a player has a perk currently equipped.<br>
		Active perks are stored with a `!` prefix.
	</description>
	<realm>Shared</realm>
	<group>Perks</group>
	<args>
		<arg name="ply" type="Player">Player to check</arg>
		<arg name="perkID" type="string">ID of the perk to check</arg>
	</args>
	<rets>
		<ret name="active" type="boolean">Whether the specified perk is active</ret>
	</rets>
</function>