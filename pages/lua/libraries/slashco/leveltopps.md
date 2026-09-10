<function name="LevelToPPs" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the amount of perk points a player should have at the given level, based on `SlashCo.StartPP` and `SlashCo.PPsPerLevel`.
	</description>
	<realm>Shared</realm>
	<group>Experience</group>
	<args>
		<arg name="level" type="number">The level to calculate perk points for.</arg>
	</args>
	<rets>
		<ret name="pps" type="number">The amount of perk points for the given level.</ret>
	</rets>
</function>