<function name="SlashCo:OnAngerTick" parent="" type="hook">
	<description>
		Called once per second for every player on the slasher team, after their passive anger gain has been applied and their slasher's own <page>SLASHER#OnAngerTick</page> function has been called.<br>
		Can be used to react to or further adjust a slasher's anger level. The return value is not used.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="slasher" type="Player">The slasher this tick is for</arg>
	</args>
</function>
