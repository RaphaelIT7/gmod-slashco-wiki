<function name="SlashCo:PrePlayerDeath" parent="" type="hook">
	<description>
		Called from `GM:PlayerDeath` for a dying Survivor, before their items are dropped and a life is subtracted.<br>
	</description>
	<realm>Server</realm>
	<args>
		<arg name="victim" type="Player">The Survivor who died</arg>
	</args>
	<rets>
		<ret name="cancel" type="boolean" optional>Return `true` to completely cancel the death (no items dropped, no life lost).</ret>
	</rets>
</function>
