<function name="OwnsPerk" parent="SlashCo" type="libraryfunc">
	<description>
		Checks whether a player owns a perk.
	</description>
	<realm>Shared</realm>
	<group>Perks</group>
	<args>
		<arg name="ply" type="Player">Player to check</arg>
		<arg name="perkID" type="string">ID of the perk to check</arg>
	</args>
	<rets>
		<ret name="owns" type="boolean">Whether the player's owned perk string contains the specified perk ID</ret>
	</rets>
</function>